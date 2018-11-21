<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teams/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('teams.create', compact('teams'));
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
        //dd(request()->all());

        //Validating the data
        $this->validate(request(), [
            'teamId' => 'required',
            'teamName' => 'required|max:50',
            'schoolId' => 'required'
        ]);

        $teams = new Team;

        $teams->teamId = $request->teamId;

        $teams->teamName = $request->teamName;

        $teams->schoolId = $request->schoolId;

        $teams->save();

         //Flashing a message to confirm that a team has been entered into the database
        session()->flash('message', 'Team has been inserted');
    }

    /**
     * Display the specifiedd(request()->all());d resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(Teams $teamId)
    {
        //
        return view('teams.show', compact('teamId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit($teamId, Request request)
    {
        //
         // Validating the information that is being entered into the database
        $this->validate(request(), [
            'teamId'    => $teamId,
            'teamName'  => 'required|max:50',         
            'schoolId'  => 'required'
        ]);

        //Retrieves the team
        $teams = Team::find($teamId);

        //Updates the team
        $teams->teamName = $request->teamName;
        $teams->schoolId = $request->schoolId;

        //Saves the team
        $teams->save();

        //Flashes a message to let the user know that they have updated a team
        session()->flash('message', 'Team has been updated');

        //Redirects the user back to the teams page
        return redirect()-back();
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
