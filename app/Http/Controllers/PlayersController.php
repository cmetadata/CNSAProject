<?php

namespace App\Http\Controllers;

use App\Player;
use App\Person;
use App\Team;
use App\School;
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

        $i = 0;
        foreach ($players as $player)
        {
            $team[$i] = Team::find($player->teamId);
            $person[$i] = Person::find($player->personId);
            $school[$i] = School::find($team[$i]->schoolId);
            $i += 1;
        }


        //Gives the view of all the players
        return view('players.index', compact('players', 'team', 'person', 'school'));
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
        $this->validate(request(), [
            'personId' => 'required',
            'teamId' => 'required',
            'playerRating' => 'required',
            'yearEntered' => 'required',
            'position'    => 'required'
        ]);

        //USED FOR TESTING
        //dd($request);
        
        //dd(request()->all());

        //dd(request(['firstName', 'lastName']));

        //Creating a new player object and populating it // THIS IS A TEMPORARY FIX UNTIL MODEL IS CREATED
        $player = new Player;

        $player->personId = $request->personId;
        
        $player->yearEntered = $request->yearEntered;

        $player->playerRating = $request->playerRating;

        $player->position = $request->position;

        $player->teamId = $request->teamId;

        $player->save();

        //Create the player
        //$player = Player::create(request(['playerId', 'firstName', 'lastName', 'schoolId', 'yearEntered', 'position', 'teamId', 'redCards', 'yellowCards', 'goals', 'playerRating', 'assists', 'saves' ]));

        //Saves the player
        // $player->save();

        //Flashing a message to confirm that the player has been entered into the database
        session()->flash('message', 'Player has been inserted');  

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    // public function show($playerId)
    // {
    //     //Shows an individual player
    //     $player = Player::find($playerId);
    //     //How we decided to actually do it 
    //     return view('players.show', compact('player'));
    // }
    public function show(Request $request) 
    {
        
        $player = Player::find($request->playerId);
        $person = Person::find($player->personId);
        $team = Team::find($player->teamId);
        $school = School::find($team->schoolId);
        
        //dd($player, $team, $school);
        return view('players.show', compact(['player', 'team', 'school', 'person']));
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
            'playerId'    => $playerId,
            'firstName'   => 'required|max:35',
            'lastName'    => 'required|max:30',
            'yearEntered' => 'required',
            'position'    => 'required'
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

        //Flashes a message to let the user know that they have updated a player
        session()->flash('message', 'Player has been updated');

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
            'playerId' => $playerId
        ]); 

        //Retrieves player information
        $player = Player::find($playerId);

        //Deletes the player record
        $player->delete();

        //Flashes a message to let the user know that they have deleted a player
        seesion()->flash('message', 'Player has been deleted');

        //Redirects the user back to the previous page
        return redirect()-back();

    }
}
