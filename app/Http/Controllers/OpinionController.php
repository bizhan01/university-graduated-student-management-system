<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Opinion;
use DB;


class OpinionController extends Controller
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
      $opinions = DB::table('opinions as p')
               ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
               ->select('p.*', 'u.*', 'p.id as id', 'p.field as field')
              ->orderByRaw('(p.created_at)desc')
              ->where('p.user_id', $userID)
              ->get();

      return view('opinion.addOpinion', compact('opinions'));
    }


    public function opinionList()
    {
      // $opinions= Opinion::latest()->get();
      $opinions = DB::table('opinions as p')
               ->leftJoin('users as u', 'p.user_id', '=', 'u.id')
               ->select('p.*', 'u.*', 'p.id as id')
               ->where('p.suggestion', '!=',  null)
              ->orderByRaw('(p.created_at)desc')
              ->get();
      return view('opinion.opinionList', compact('opinions'));
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
            'field'=>'required',
            'objection'=>'nullable',
            'suggestion'=>'nullable',
            'satisfaction'=>'required',
            'status'=>'required',

    ]);
      Opinion::create([
          'user_id' => Auth::user()->id,
          'field' => request('field'),
          'objection' => request('objection'),
          'suggestion' => request('suggestion'),
          'satisfaction' => request('satisfaction'),
          'status' => request('status'),
          'created_at'=>carbon::now(),
          'updated_at'=>carbon::now(),
        ]);

        try {
         session()->flash('success', 'از شریک ساختن نظریه نیک شما محصل گرامی سپاسگزاریم. ');
         return back();
         } catch(Exception $ex) {
         session()->flash('failed', 'خطا! دوباره کوشش کنید');
         return back();
       }
    }


        public function show($id) {
         $opinion = DB::select('select * from opinions where id = ?',[$id]);
         return view('opinion.editOpinion',['opinion'=>$opinion]);
      }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function edit(Request $request,$id) {
          $user_id = $request->input('user_id');
          $field = $request->input('field');
          $objection = $request->input('objection');
          $suggestion = $request->input('suggestion');
          $satisfaction = $request->input('satisfaction');
          $status = $request->input('status');

          DB::update('update opinions set user_id = ? where id = ?',[$user_id,$id]);
          DB::update('update opinions set field = ? where id = ?',[$field,$id]);
          DB::update('update opinions set objection = ? where id = ?',[$objection,$id]);
          DB::update('update opinions set suggestion = ? where id = ?',[$suggestion,$id]);
          DB::update('update opinions set satisfaction = ? where id = ?',[$satisfaction,$id]);
          DB::update('update opinions set status = ? where id = ?',[$status,$id]);
          return redirect('/opinions');
       }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from opinions where id = ?',[$id]);
     return back();
    }
}
