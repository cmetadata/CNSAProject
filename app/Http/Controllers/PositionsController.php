<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;
use App\Position;
use App\Person;

use Illuminate\Http\Request;

class PositionsController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Holds the value of all players to be displayed
        $positions = Position::all();

        //Gives the view of all the players
        return view('positions.index', compact('positions'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Sends the user to the players.create page
        return view('positions.create');
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
            'positionDescription'   => 'required|max:7',
            'positionStartDate'    => 'required',
            'positionEndDate'    => 'required',
            'teamId'    => 'required',
            'personId'    => 'required',
        ]);

        $position = new Position;

        $position->teamId = $request->teamId;

        $position->personId = $request->personId;
        
        $position->positionDescription = $request->positionDescription;

        $position->positionStartDate = $request->positionStartDate;

        $position->positionEndDate = $request->positionEndDate;
                
        $position->save();

        //Create the player
        //$player = Player::create(request(['playerId', 'firstName', 'lastName', 'schoolId', 'yearEntered', 'position', 'teamId', 'redCards', 'yellowCards', 'goals', 'playerRating', 'assists', 'saves' ]));

        //Saves the player
        // $player->save();

        //Flashing a message to confirm that the player has been entered into the database
        session()->flash('message', 'Position has been inserted');  

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) 
    {
        return view('persons.show');
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
    public function destroy(Position $positionId)
    {
        //Validates that the id entered is an actual Player object
        $this->validate(request(), [
            'positionId' => $positionId
        ]); 

        //Retrieves player information
        $position = Position::find($positionId);

        //Deletes the player record
        $position->delete();

        //Flashes a message to let the user know that they have deleted a player
        seesion()->flash('message', 'Position has been deleted');

        //Redirects the user back to the previous page
        return redirect()-back();

    }
}
