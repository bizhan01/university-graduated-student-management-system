<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
use App\User;
use DB;

class UserOperationController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function userList()
    {
      $users = DB::table('users')->where('isAdmin', 1)->get();
      return view('student.userList', compact('users'));
    }

    public function blockList()
    {
      $users = DB::table('users')->where('status', 0) ->get();
      return view('student.blockList', compact('users'));
    }



    public function show($id) {
      $user = DB::select('select * from users where id = ?',[$id]);
     return view('student.block',['user'=>$user]);
    }

    public function unBlock($id) {
      $user = DB::select('select * from users where id = ?',[$id]);
     return view('student.unBlock',['user'=>$user]);
    }


    public function showInfo($id) {
      $user = DB::select('select * from users where id = ?',[$id]);
     return view('student.editStudent',['user'=>$user]);
    }

        public function edit(Request $request,$id) {
          $name = $request->input('name');
          $lastName = $request->input('lastName');
          $dob = $request->input('dob');
          $entery_year = $request->input('entery_year');
          $graduate_year = $request->input('graduate_year');
          $field = $request->input('field');
          $phone = $request->input('phone');
          $address = $request->input('address');
          $email = $request->input('email');
          $password = $request->input('password');
          $isAdmin = $request->input('isAdmin');
          $phone= $request->input('phone');
          $status= $request->input('status');
          $profileImage= $request->input('profileImage');

          DB::update('update users set name = ? where id = ?',[$name, $id]);
          DB::update('update users set lastName = ? where id = ?',[$lastName, $id]);
          DB::update('update users set dob = ? where id = ?',[$dob, $id]);
          DB::update('update users set entery_year = ? where id = ?',[$entery_year, $id]);
          DB::update('update users set graduate_year = ? where id = ?',[$graduate_year, $id]);
          DB::update('update users set field = ? where id = ?',[$field, $id]);
          DB::update('update users set phone= ? where id = ?',[$phone, $id]);
          DB::update('update users set address = ? where id = ?',[$address, $id]);
          DB::update('update users set email = ? where id = ?',[$email, $id]);
          DB::update('update users set password = ? where id = ?',[$password, $id]);
          DB::update('update users set isAdmin = ? where id = ?',[$isAdmin, $id]);
          DB::update('update users set phone = ? where id = ?',[$phone, $id]);
          DB::update('update users set status = ? where id = ?',[$status, $id]);
          DB::update('update users set profileImage = ? where id = ?',[$profileImage, $id]);
          return redirect('/studentList');
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
       DB::delete('delete from users where id = ?',[$id]);
       return redirect('/studentList');
    }
}
