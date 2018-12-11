<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;
use App\Position;
use App\Person;

use Illuminate\Http\Request;

class PersonsController extends Controller
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
        //Holds the value of all players to be displayed
        $persons = Person::all();

        //Gives the view of all the players
        return view('persons.index', compact('persons'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Sends the user to the players.create page
        return view('persons.create');
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
            'personFirstName'   => 'required|max:35',
            'personLastName'    => 'required|max:30',
        ]);

        $person = new Person;
        
        $person->personFirstName = $request->personFirstName;

        $person->personLastName = $request->personLastName;

        $person->save();

        //Create the player
        //$player = Player::create(request(['playerId', 'firstName', 'lastName', 'schoolId', 'yearEntered', 'position', 'teamId', 'redCards', 'yellowCards', 'goals', 'playerRating', 'assists', 'saves' ]));

        //Saves the player
        // $player->save();

        //Flashing a message to confirm that the player has been entered into the database
        session()->flash('message', 'Person has been inserted'); 

        return redirect("/persons"); 

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) 
    {
        $person = Person::find($request->personId);
        $positions = Position::all()->where('personId', $request->personId);
        
        //dd($player, $team, $school);
        return view('persons.show', compact(['person', 'positions']));
    }


    /**
     * Allows editing of the players record
     *
     * @param  \App\Player  $playerId
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {       

    }

    /**
     * Deletes the Players record from the database.
     *
     * @param  \App\Player  $playerId
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $person = Person::find($request->personId);
        $person->delete();
        return redirect('/persons')->with('success', 'Person Deleted');
    }
}
