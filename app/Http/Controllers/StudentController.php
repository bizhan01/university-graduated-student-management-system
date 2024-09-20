<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\User;
use Illuminate\Support\Str;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class StudentController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function addStudent() {
    	return view('student.addStudent');
    }


    public function softStudentList() {
        $students = DB::table('users')->where('status', 1)->where('isAdmin', 1)->where('field', '=', 'سافت ویر')->latest()->get()->all();
        return view('student.softStudentList', ['students' => $students]);
    }

    public function itStudentList() {
        $students = DB::table('users')->where('status', 1)->where('isAdmin', 1)->where('field', '=', 'شبکه')->latest()->get()->all();
        return view('student.itStudentList', ['students' => $students]);
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
            'gender' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'entery_year' => ['required', 'string', 'max:255'],
            'graduate_year' => ['required', 'string', 'max:255'],
            'field' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'profileImage'=> 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'

    ]);
        User::create([
          'gender' => request('gender'),
          'name' => request('name'),
          'lastName' => request('lastName'),
          'dob' => request('dob'),
          'entery_year' => request('entery_year'),
          'graduate_year' => request('graduate_year'),
          'field' => request('field'),
          'phone' => request('phone'),
          'address' => request('address'),
          'email' => request('email'),
          'password' => Hash::make(request('password')),
          'isAdmin' =>request('isAdmin'),
          'status' => ('1'),
          'profileImage' =>('about.png'),
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




}
