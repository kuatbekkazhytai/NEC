<?php

namespace App\Http\Controllers;

use App\Course;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        $courses = Course::all();
        $teachers = DB::table('teachers')->simplePaginate(3);
        return view('welcome', compact('courses','teachers'));
    }
}
