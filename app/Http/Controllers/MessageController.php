<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Message;
use DB;


class MessageController extends Controller
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

      $messages = DB::table('messages as p')
               ->leftJoin('users as u', 'p.sender_id', '=', 'u.id')
               ->select('p.*', 'u.*', 'p.id as id')
              ->orderByRaw('(p.created_at)desc')
              ->where('p.sender_id', $userID)
              ->where('p.status', 0)
              ->get();

      return view('message.messages', compact('messages'));
    }


    public function inbox()
    {
      $messages = DB::table('messages as p')
               ->leftJoin('users as u', 'p.sender_id', '=', 'u.id')
               ->select('p.*', 'u.*', 'p.id as id')
              ->orderByRaw('(p.created_at)desc')
              ->where('p.status', 0)
              ->get();

      return view('message.inbox', compact('messages'));
    }


    public function sendbox()
    {
      $messages = DB::table('messages as p')
               ->leftJoin('users as u', 'p.sender_id', '=', 'u.id')
               ->select('p.*', 'u.*', 'p.id as id')
              ->orderByRaw('(p.created_at)desc')
              ->where('p.status', 1)
              ->get();

      return view('message.sendbox', compact('messages'));
    }


    public function receivedMessages()
    {
      if (Auth::check()){
        $userID = Auth::user()->id;
      }
      $messages = DB::table('messages as p')
               ->leftJoin('users as u', 'p.sender_id', '=', 'u.id')
               ->select('p.*', 'u.*', 'p.id as id')
              ->orderByRaw('(p.created_at)desc')
              ->where('p.sender_id', $userID)
              ->where('p.status', 1)
              ->get();

      return view('message.receivedMessages', compact('messages'));
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
            'subject'=>'required',
            'message'=>'required',
            'reply'=>'nullable',
            'status'=>'required',

    ]);
      Message::create([
          'sender_id' => Auth::user()->id,
          'subject' => request('subject'),
          'message' => request('message'),
          'reply' => request('reply'),
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


        public function readMessage($id) {
          $message = DB::table('messages as p')
                   ->leftJoin('users as u', 'p.sender_id', '=', 'u.id')
                   ->leftJoin('users as ur', 'p.replier_id', '=', 'ur.id')
                   ->select('p.*', 'u.*', 'p.id as id', 'ur.profileImage as profileImage2', 'ur.name as name2')
                  ->where('p.id', $id)
                  ->get();
         return view('message.readMessage',['message'=>$message]);
      }



      public function show($id) {
        $message = DB::table('messages as p')
                 ->leftJoin('users as u', 'p.sender_id', '=', 'u.id')
                 ->select('p.*', 'u.*', 'p.id as id')
                ->where('p.id', $id)
                ->get();
       return view('message.replyMessage',['message'=>$message]);
    }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function edit(Request $request,$id) {
          $sender_id = $request->input('sender_id');
          $subject = $request->input('subject');
          $message = $request->input('message');
          $reply = $request->input('reply');
          $replier_id = $request->input('replier_id');
          $status = $request->input('status');

          DB::update('update messages set sender_id = ? where id = ?',[$sender_id, $id]);
          DB::update('update messages set subject = ? where id = ?',[$subject, $id]);
          DB::update('update messages set message = ? where id = ?',[$message, $id]);
          DB::update('update messages set reply = ? where id = ?',[$reply, $id]);
          DB::update('update messages set replier_id = ? where id = ?',[$replier_id, $id]);
          DB::update('update messages set status = ? where id = ?',[$status, $id]);
          return redirect('/messages');
       }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from messages where id = ?',[$id]);
     return back();
    }
}
