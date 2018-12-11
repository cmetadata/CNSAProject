<?php

namespace App\Http\Controllers;

use App\School;
use App\Team;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{

    public function __construct()
    {
        //Guests can see everything except for these views
        $this->middleware('guest', ['except' => 'create', 'edit', 'update', 'delete', 'store']);
        //Coaches can see everything except delete functionality
        $this->middleware('coach', ['except' => 'delete']);
        //Admins can see everything
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Holds the value of all players to be displayed
        $schools = School::all();

        //Gives the view of all the players
        return view('schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validating the data
        $this->validate(request(), [
            'schoolName' => 'required|max:50',
            'schoolRanking' => 'required|max:50',
            'schoolPopulation' => 'required|max:10'
        ]);

        $schools = new School;

        $schools->schoolName = $request->schoolName;

        $schools->organizationId = $request->organizationId;

        $schools->schoolRanking = $request->schoolRanking;

        $schools->schoolPopulation = $request->schoolPopulation;

        $schools->save();

        //Flashing a message to confirm that a team has been entered into the database
        session()->flash('message', 'School has been inserted');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $school = School::find($request->schoolId);

        // must find teams by schoolId        
        // needs to return a collection or it wont work
        $teams = Team::all()->where('schoolId', $request->schoolId);
        
        //dd($school);
        return view('schools.show', compact(['school', 'teams']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit($schoolId)
    {
        $school = School::find($schoolId);

        return view('schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, schoolId)
    {
        //Validates that the information being input is valid
        $this->validate(request(), [
            'schoolName' => 'required|max:50',
            'schoolRanking' => 'required'
        ]);

        //Retrieves the player
        $school = School::find($schoolId);

        //Updates the player
        $school->schoolName = $request->schoolName;
        $school->schoolRanking = $request->schoolRanking;
        $school->schoolPopulation = $request->schoolPopulation;
        $school->organizationId = $request->organizationId;

        //Saves
        $player->save();

        //Flashes a message to let the user know that they have updated a player
        session()->flash('message', 'School has been updated');

        //Redirects the user back to the players page
        return redirect('/schools');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $school = School::find($request->schoolId);
        $school->delete();
        return redirect('/school')->with('success', 'School Deleted');
    }
}
