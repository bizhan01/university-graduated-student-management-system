<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Application;
use DB;


class ApplicationController extends Controller
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
      if (Auth::check()){
        $userID = Auth::user()->id;
      }
      $applications = DB::table('applications as p')
               ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
               ->leftJoin('jobs as j', 'p.job_id', '=', 'j.id')
               ->select('p.*', 'u.*', 'j.*', 'p.id as id')
              ->where('p.user_id', $userID)
              ->orderByRaw('(p.created_at)desc')
              ->get();
    return view('application.addApplication', compact('applications'));
    }


    public function applicationsList()
      {
        $applications = DB::table('applications as p')
                 ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
                 ->leftJoin('jobs as j', 'p.job_id', '=', 'j.id')
                 ->select('p.*', 'u.*', 'j.*', 'p.id as id')
                // ->orderByRaw('(p.created_at)desc')
                ->get();

        // $applications = Application::latest()->get();
        return view('application.applicationsList', compact('applications'));
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
            'job_id'=>'required',
      ]);

      Application::create([
          'user_id' => Auth::user()->id,
          'job_id' => request('job_id'),
          'created_at'=>carbon::now(),
          'updated_at'=>carbon::now(),
        ]);

        try {
         session()->flash('successApp', 'درخواست شما برای این فرصت شغلی موفقانه دریافت شد.');
         return back();
         } catch(Exception $ex) {
         session()->flash('failed', 'خطا! دوباره کوشش کنید');
         return back();
       }
    }



      public function show($id) {
        // $message = DB::table('messages as p')
        //          ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
        //          ->select('p.*', 'u.*', 'p.id as id')
        //         ->where('p.id', $id)
        //         ->get();
        $application = DB::select('select * from applications where id = ?',[$id]);
       return view('application.editApplication',['application'=>$application]);
    }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function edit(Request $request,$id) {
          $user_id = $request->input('user_id');
          $job_id = $request->input('job_id');
          $app_status = $request->input('app_status');

          DB::update('update applications set user_id = ? where id = ?',[$user_id, $id]);
          DB::update('update applications set job_id = ? where id = ?',[$job_id, $id]);
          DB::update('update applications set app_status = ? where id = ?',[$app_status, $id]);
          return redirect('/applicationsList');
       }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from applications where id = ?',[$id]);
     return back();
    }
}
