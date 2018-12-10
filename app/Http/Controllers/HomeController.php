<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Makes it so that only someone who is logged in can see the home page
        $this->middleware('auth', ['only' => 'index']);
    }

    public function admin(request $req) {
        return view('middleware')->withMessage("Admin");
    }

    public function coach(request $req) {
        return view('middleware')->withMessage("Coach");
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('sessions.create')
    }
}
