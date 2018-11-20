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
        //Holds the value of 
        //$players = Player::all();

        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('players.create', compact('player'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

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

        //Validating the data
        // $this->validate(request(), [
        //     'firstName' => 'required|max:35',
        //     'lastName' => 'required|max:30',
        //     'schoolId' => 'required',
        //     'yearEntered' => 'required',
        //     'position' => 'required',
        //     'playerRating' => 'required'
        // ]);

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
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
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
