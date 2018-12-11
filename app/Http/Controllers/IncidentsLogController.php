<?php

namespace App\Http\Controllers;

use App\Incident;
use App\IncidentLog;
use Illuminate\Http\Request;

class IncidentsLogController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('incidents.log.create');
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
            'playerId' => 'required',
            'incidentId' => 'required',
            'incidentDate' => 'required',
        ]);

        $incidents = new IncidentLog;

        $incidents->playerId = $request->playerId;

        $incidents->incidentDate = $request->incidentDate;

        $incidents->incidentId = $request->incidentId;
        
        $incidents->save();

        //Flashing a message to confirm that a team has been entered into the database
        session()->flash('message', 'incidents has been inserted');                        
    }

}
