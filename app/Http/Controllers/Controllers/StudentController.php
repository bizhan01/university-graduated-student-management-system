<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use Illuminate\Support\Str;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class StudentController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function addStudent() {
    	return view('student.addStudent');
    }


    public function studentList() {
        $students = DB::table('users')->where('status', 1)->where('isAdmin', 1)->latest()->get()->all();
        return view('student.studentList', ['students' => $students]);
    }



}
