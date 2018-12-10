<?php

namespace App\Http\Controllers;

use App\Player;
use App\PlayerStat;
use App\Person;
use App\Team;
use App\Incident;
use App\IncidentLog;
use App\Scholarship;
use App\ScholarshipLog;
use App\Injury;
use App\InjuryLog;
use App\School;
use Illuminate\Http\Request;

class PlayersController extends Controller
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
            'personFirstName'   => 'required|max:35',
            'personLastName'    => 'required|max:30',
            'teamId'            => 'required',
            'playerRating'      => 'required',
            'yearEntered'       => 'required',
            'position'          => 'required'
        ]);

        //USED FOR TESTING
        //dd($request);
        
        //dd(request()->all());

        //dd(request(['firstName', 'lastName']));


        //CREATE A NEW PERSON AND THEN A NEW PLAYER

        $person = new Person;
        
        $person->personFirstName = $request->personFirstName;

        $person->personLastName = $request->personLastName;

        $person->save();

        //dd($person);

        //Creating a new player object and populating it // THIS IS A TEMPORARY FIX UNTIL MODEL IS CREATED
        $player = new Player;

        $player->personId = $person->personId;
        
        $player->yearEntered = $request->yearEntered;

        $player->highSchool = $request->highSchool;

        $player->playerRating = $request->playerRating;

        $player->position = $request->position;

        $player->teamId = $request->teamId;

        $player->save();

        //Create the player
        //$player = Player::create(request(['playerId', 'firstName', 'lastName', 'schoolId', 'yearEntered', 'position', 'teamId', 'redCards', 'yellowCards', 'goals', 'playerRating', 'assists', 'saves' ]));

        //Saves the player
        // $player->save();

        //Flashing a message to confirm that the player has been entered into the database
        //session()->flash('message', 'Player has been inserted');  

        return redirect('/players/'.$player->playerId);
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
        
        $incidents = IncidentLog::all()->where('playerId', $request->playerId);
        $injuries = InjuryLog::all()->where('playerId', $request->playerId);
        $scholarships = ScholarshipLog::all()->where('playerId', $request->playerId);
        $stats = PlayerStat::all()->where('playerId', $request->playerId);

        $person = Person::find($player->personId);
        $team = Team::find($player->teamId);
        $school = School::find($team->schoolId);

       
        $i = 0;
        foreach ($incidents as $incident)
        {
            $incidentNames[$i] = Incident::find($incident->incidentId);
            $i += 1;
        }


        $i = 0;
        foreach ($injuries as $injury)
        {
            $injuryNames[$i] = Injury::find($injury->injuryId);
            $i += 1;
        }

        $i = 0;
        foreach ($scholarships as $scholarship)
        {
            $scholarshipNames[$i] = Scholarship::find($scholarship->scholarshipId);
            $i += 1;
        }


        $i = 0;
        $goals = 0;
        $assists = 0;
        $saves = 0;
        $redCard = 0;
        $yellowCard = 0;
        
        foreach ($stats as $stat)
        {
            $goals += $stat->goals;
            $assists += $stat->assists;
            $saves += $stat->saves;
            $redCard += $stat->redCard;
            $yellowCard +=  $stat->yellowCard;
            $i += 1;
        }

        
        //dd($player, $team, $school);
        return view('players.show', compact(['player', 'team', 'school', 'person', 'incidents', 'incidentNames', 'injuries', 'injuryNames',       
        'scholarships', 'scholarshipNames', 'stats', 'goals', 'assists', 'saves', 'redCard', 'yellowCard']));
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
            'yearEntered' => 'required|max:4',
            'position'    => 'required',
            'highSchool'  => 'required'
        ]);

        //Retrieves the player
        $player = Player::find($playerId);

        //Updates the player
        $player->personId = $request->personId;

        $player->yearEntered = $request->yearEntered;

        $player->position = $request->position;

        $player->teamId = $request->teamId;

        $player->playerRating = $request->playerRating;

        // Don't know if we actually need this ??
        // $player->playerStatsId = $request->playerStatsId;

        $player->schoolId = $request->schoolId;       

        //Saves the player
        $player->save();

        //Flashes a message to let the user know that they have updated a player
        session()->flash('message', 'Player has been updated');

        //Redirects the user back to the players page
        return redirect()->back();
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
        $player = Player::find($request->playerId);
        $player->delete();
        return redirect('/players')->with('success', 'Player Deleted');
    }
}
