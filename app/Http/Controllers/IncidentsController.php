<?php

namespace App\Http\Controllers;

use App\Incident;
use App\IncidentLog;
use App\Player;
use Illuminate\Http\Request;

class IncidentsController extends Controller
{
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
        //Holds the value of all incidents to be displayed
        $incidents = Incident::all();
        

        $i = 0;
        foreach ($incidents as $incident)
        {
            $incidentNames[$i] = Incident::find($incident->incidentId);
            $i += 1;
        }


        return view('incidents.index', compact('incidents', 'incidentNames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('incidents.create');
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
            'incidentDescription' => 'required',
        ]);

        $incidents = new Incident;

        $incidents->incidentDescription = $request->incidentDescription;

        $incidents->save();

        //Flashing a message to confirm that a team has been entered into the database
        session()->flash('message', 'incidents has been inserted');                        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(Incident $incident)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(Incident $incident)
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
    public function update(Request $request, Incident $incident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incident $incident)
    {
        //
    }
}
