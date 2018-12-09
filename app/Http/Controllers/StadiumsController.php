<?php

namespace App\Http\Controllers;

use App\Stadium;
use Illuminate\Http\Request;

class StadiumsController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth')->except(['index', 'show']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Holds the value of all players to be displayed
        $stadiums = Stadium::all();

        //Gives the view of all the players
        return view('stadiums.index', compact('stadiums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('stadiums.create');
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
        //Validating the data
        $this->validate(request(), [
            'stadiumName' => 'required|max:50',
            'stadiumCapacity' => 'required'
        ]);

        $stadiums = new Stadium;

        $stadiums->organizationId = $request->organizationId;

        $stadiums->stadiumName = $request->stadiumName;

        $stadiums->stadiumCapacity = $request->stadiumCapacity;

        $stadiums->save();

        //Flashing a message to confirm that a team has been entered into the database
        session()->flash('message', 'Stadium has been inserted');                
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
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
    }
}
