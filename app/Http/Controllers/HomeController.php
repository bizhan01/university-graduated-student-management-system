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

        $x1 = DB::table('opinions')->where('field', '=', 'ریاست')->sum('satisfaction');
        $y1 = DB::table('opinions')->where('field', '=', 'ریاست')->count('satisfaction');

        $x2 = DB::table('opinions')->where('field', '=', 'کریگولم')->sum('satisfaction');
        $y2 = DB::table('opinions')->where('field', '=', 'کریگولم')->count('satisfaction');

        $x3 = DB::table('opinions')->where('field', '=', 'محیط درسی')->sum('satisfaction');
        $y3 = DB::table('opinions')->where('field', '=', 'محیط درسی')->count('satisfaction');


        $x4 = DB::table('opinions')->where('field', '=', 'کارمندان اداری')->sum('satisfaction');
        $y4 = DB::table('opinions')->where('field', '=', 'کارمندان اداری')->count('satisfaction');

        $x5 = DB::table('opinions')->where('field', '=', 'فیس و مالی')->sum('satisfaction');
        $y5 = DB::table('opinions')->where('field', '=', 'فیس و مالی')->count('satisfaction');

        $x6 = DB::table('opinions')->where('field', '=', 'سایر')->sum('satisfaction');
        $y6 = DB::table('opinions')->where('field', '=', 'سایر')->count('satisfaction');


        return view('home', compact('jobs', 'advertisements', 'studentCount', 'jobCount', 'opinionCount', 'advertisementCount',
        'x1', 'y1',
        'x2', 'y2',
        'x3', 'y3',
        'x4', 'y4',
        'x5', 'y5',
        'x6', 'y6'
      ));
    }



}
