<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Job;
use App\Advertisement;
use DB;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
      $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = DB::table('users')->count('id');
        $jobs= Job::latest()->orderByRaw('(id)desc LIMIT 1')->get();
        $advertisements= Advertisement::latest()->orderByRaw('(id)desc LIMIT 1')->get();

        $studentCount = DB::table('users')->where('isAdmin', '=', 1)->count('id');
        $jobCount = DB::table('jobs')->count('id');
        $opinionCount = DB::table('opinions')->count('id');
        $advertisementCount = DB::table('advertisements')->count('id');

        return view('home', compact('jobs', 'advertisements', 'studentCount', 'jobCount', 'opinionCount', 'advertisementCount'));
    }



}
