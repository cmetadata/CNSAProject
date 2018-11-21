<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Player $players)
    {
        //Holds the value of all players to be displayed
        $players = Player::all();

        //Gives the view of all the players
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Sends the user to the players.create page
        return view('players.create', compact('player'));
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
        // $this->validate(request(), [
        //     'firstName' => 'required|max:35',
        //     'lastName' => 'required|max:30',
        //     'schoolId' => 'required',
        //     'yearEntered' => 'required',
        //     'position' => 'required'
        // ]);

        //dd($request);
        
        //dd(request()->all());

        //dd(request(['firstName', 'lastName']));


        $player = new Player;

        $player->firstName = $request->firstName;

        $player->lastName = $request->lastName;

        $player->schoolId = $request->schoolId;
        
        $player->yearEntered = $request->yearEntered;

        $player->position = $request->position;

        $player->playerRating = $request->playerRating;

        $player->save();

        //Create the player
        //$player = Player::create(request(['playerId', 'firstName', 'lastName', 'schoolId', 'yearEntered', 'position', 'teamId', 'redCards', 'yellowCards', 'goals', 'playerRating', 'assists', 'saves' ]));

        //Flashing a message to confirm that the player has been entered into the database
        session()->flash('message', 'Player has been inserted');

        dd(request()->all());

        // //Create the player
        // $player = Player::create(request(['firstName', 'lastName', 'schoolId', 'yearEntered', 'position', 'teamId', 'redCards', 'yellowCards', 'goals', 'playerRating', 'assists', 'saves', 'playerId' ]));

        // $player->save();

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show($playerId)
    {
        //Shows an individual player
        //$player = Player::find($playerId)
        //How we decided to actually do it 
        return view('players.show', compact('playerId'));
    }

    /**
     * Allows editing of the players record
     *
     * @param  \App\Player  $playerId
     * @return \Illuminate\Http\Response
     */
    public function edit($playerId, Request $request)
    {       

        // Validating the information that is being entered into the database
        $this->validate(request(), [
            'firstName' => 'required|max:35',
            'lastName' => 'required|max:30',
            'schoolId' => 'required',
            'yearEntered' => 'required',
            'position' => 'required'
        ]);

        //Retrieves the player
        $player = Player::find($playerId);

        //Updates the player
        $player->firstName = $request->firstName;

        $player->lastName = $request->lastName;

        $player->schoolId = $request->schoolId;
        
        $player->yearEntered = $request->yearEntered;

        $player->position = $request->position;

        $player->playerRating = $request->playerRating;

        //Saves the player
        $player->save();

        //Redirects the user back to the players page
        return redirect()-back();
    }

    /**
     * Deletes the Players record from the database.
     *
     * @param  \App\Player  $playerId
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $playerId)
    {
        //Validates that the id entered is an actual Player object
        $this->validate(request(), [
        ]); 

    }

        /**
     * Don't know what this is going to do ?
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

}
