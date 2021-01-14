<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ApplicationController extends Controller
{
    public function index() 
    {
        $applications = Application::all();
        return view('application.index', compact('applications'));
    }
    
    public function store(Request $request) 
    {
        $records = array_slice($request->all(), 0);
        $validator = Validator::make( $records,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
        ]);
        $teacher = Application::create([
            'name' => $records['name'],
            'email' => $records['email'],
            'description' => $records['description'],
        ]);

        return Redirect::back();
    }

    public function saveRequest(Request $request) 
    {
        // dd($request->all());
            $records = array_slice($request->all(), 0);
            $validator = Validator::make( $records,[
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:10'],
            ]);
            $teacher = Application::create([
                'name' => $records['name'],
                'email' => $records['email'],
                'phone' => $records['phone'],
            ]);

            return Redirect::back();
    }

    public function view(Application $application) 
    {
        return view('application.view', compact('application'));
    }
}
