<?php

namespace App\Http\Controllers;

use App\Coach;
use Illuminate\Http\Request;

class CoachesController extends Controller
{
    /**
     *
     *
     *
     *
     */
    public function __construct()
    {
        //Guests can see everything except for these views
        //$this->middleware('guest', ['except' => 'create', 'edit', 'update', 'delete', 'store']);
        //Coaches can see everything except delete functionality
        //$this->middleware('coach', ['except' => 'delete']);
        //Admins can see everything
        //$this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Holds the value of all coaches to be displayed
        $coaches = Coach::all();

        //Gives the view of all the coaches
        return view('coaches.index', compact('coaches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(Teams $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }//
}
