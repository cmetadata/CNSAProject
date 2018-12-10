<?php

namespace App\Http\Controllers;

use App\Player;
use App\PlayerStat;
use App\Person;
use App\GameStat;
use App\Game;
use App\Stadium;
Use App\Team;
use Illuminate\Http\Request;

class GamesController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth')->except(['index', 'show']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();

        $index = 0;

        $i = 0;
        foreach ($games as $game)
        {
            // find the stadium for each game
            $stadium[$i] = Stadium::find($game->stadiumId);       
            
            
            // this returns a collection into the gameStats array
            $gameStats[$i] = GameStat::all()->where('gameId', $game->statId);


            // remainder
            if (($index % 2) == 1)
            {
                $index += 1;
            }    

            // find the team based on teamId on gameStats array element
            $teams1[$i] = Team::find($gameStats[$i]->get($index)->teamId);
            
            // find the second team by adding +1 in the get area of the collection
            $teams2[$i] = Team::find($gameStats[$i]->get($index+1)->teamId);

            $i += 1;
            $index += 1;
        }

        return view('games.index', compact('games', 'stadium', 'gameStats', 'teams1', 'teams2'));
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
        $gameStat1->gameId = $game->statId;
        $gameStat1->save();
        
        $gameStat2 = new GameStat; 
        $gameStat2->teamScore = $request->teamScore2;
        $gameStat2->teamId = $request->teamId2;
        $gameStat2->gameId = $game->statId;
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
        $game = Game::find($request->statId);

        $players = PlayerStat::all()->where('gameId', $game->statId);

        $teams = GameStat::all()->where('gameId', $request->statId);

        $teamName1 = Team::find($teams[0]);
        $teamName2 = Team::find($teams[1]);
        $playerStatsTeam1 = PlayerStat::all()->where('teamId', $teams[0]->teamId);
        $playerStatsTeam2 = PlayerStat::all()->where('teamId', $teams[1]->teamId);

        $i = 0;
        foreach ($playerStatsTeam1 as $statTeam1)
        {
            $statTeam1[$i] = PlayerStat::find($teams[0]->teamId);
            $i += 1;
        }


        $i = 0;
        foreach ($players as $player)
        {
            $statTeam2[$i] = PlayerStat::find($teams[1]->teamId);
            $i += 1;
        }

        return view('games.show', 'game', 'statTeam1', 'statTeam2', 'teamName1', 'teamName2');
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
