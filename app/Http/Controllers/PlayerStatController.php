<?php

namespace App\Http\Controllers;

use App\Player;
use App\PlayerStat;
use App\Person;
use App\Team;
use App\Game;
use App\GameStat;
use App\Incident;
use App\IncidentLog;
use App\Scholarship;
use App\ScholarshipLog;
use App\Injury;
use App\InjuryLog;
use App\School;
use Illuminate\Http\Request;

class PlayerStatController extends Controller
{
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Sends the user to the players.create page
        return view('players.stat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Creating a new player object and populating it // THIS IS A TEMPORARY FIX UNTIL MODEL IS CREATED
        $playerStat = new PlayerStat;

        $playerStat->goals = $request->goals;
        
        $playerStat->saves = $request->saves;

        $playerStat->assists = $request->assists;

        $playerStat->redCard = $request->redCard;

        $playerStat->yellowCard = $request->yellowCard;

        $playerStat->gameId = $request->gameId;

        $playerStat->playerId = $request->playerId;

        $playerStat->teamId = $request->teamId;

        $playerStat->save();

        
        return redirect('/players/'.$playerStat->playerId);
    }

}