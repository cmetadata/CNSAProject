<?php

namespace App\Http\Controllers;

use App\Game;
use App\GameStat;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('games.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        // declare stat models
        $game = new Game;

        $game->gameDate = $request->gameDate;

        $game->gameAttendance = $request->gameAttendance;

        $game->stadiumId = $request->stadiumId;

        $game->save();



        $gameStat1 = new GameStat;

        $gameStat1->teamScore = $request->teamScore1;

        $gameStat1->teamId = $request->teamId1;

        $gameStat1->gameId = $game->gameId;

        $gameStat1->save();

        
        $gameStat2 = new GameStat;

        $gameStat2->teamScore = $request->teamScore2;

        $gameStat2->teamId = $request->teamId2;

        $gameStat2->gameId = $game->gameId;

        $gameStat2->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return view('games.show');
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
