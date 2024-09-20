<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Job;
use App\Advertisement;
use DB;


class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $jobs= Job::latest()->get();
      return view('jobs.addJob', compact('jobs'));
    }


    public function jobsList()
    {
      $jobs= Job::latest()->get();
      $advertisements= Advertisement::latest()->get();
      return view('jobs.jobsList', compact('jobs', 'advertisements'));
    }


    public function  applicantList($id)
    {
      $applicants = DB::table('jobs as app')
           ->leftJoin('applications as u', 'app.id', '=', 'u.job_id')
           ->leftJoin('users as ur', 'u.user_id', '=', 'ur.id')
           ->select('app.*', 'u.*', 'ur.*')
           ->where('app.id', $id)
           ->get();

      return view('jobs.applicantList', compact('applicants'));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate(request(),[
            'title'=>'required|max: 40',
            'branch'=>'required',
            'shift'=>'required',
            'gender'=>'required',
            'field'=>'required',
            'experience'=>'required',
            'deadLine'=>'required|date|date_format:Y-m-d|after:today',
            'description'=>'nullable',

    ]);
      Job::create([
          'title' => request('title'),
          'branch' => request('branch'),
          'shift' => request('shift'),
          'gender' => request('gender'),
          'field' => request('field'),
          'experience' => request('experience'),
          'deadLine' => request('deadLine'),
          'description' => request('description'),
          'created_at'=>carbon::now(),
          'updated_at'=>carbon::now(),
        ]);

        try {
         session()->flash('success', 'عملیات موافقانه اجرا شد ');
         return back();
         } catch(Exception $ex) {
         session()->flash('failed', 'خطا! دوباره کوشش کنید');
         return back();
       }
    }


        public function show($id) {
         $job = DB::select('select * from jobs where id = ?',[$id]);
         return view('jobs.editJob',['job'=>$job]);
      }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function edit(Request $request,$id) {
          $title = $request->input('title');
          $branch = $request->input('branch');
          $shift = $request->input('shift');
          $gender = $request->input('gender');
          $field = $request->input('field');
          $experience = $request->input('experience');
          $deadLine = $request->input('deadLine');
          $description = $request->input('description');

          DB::update('update jobs set title = ? where id = ?',[$title, $id]);
          DB::update('update jobs set branch = ? where id = ?',[$branch, $id]);
          DB::update('update jobs set shift = ? where id = ?',[$shift, $id]);
          DB::update('update jobs set gender = ? where id = ?',[$gender, $id]);
          DB::update('update jobs set field = ? where id = ?',[$field, $id]);
          DB::update('update jobs set experience = ? where id = ?',[$experience, $id]);
          DB::update('update jobs set deadLine = ? where id = ?',[$deadLine, $id]);
          DB::update('update jobs set description = ? where id = ?',[$description,$id]);
          return redirect('/jobs');
       }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from jobs where id = ?',[$id]);
     return back();
    }
}
