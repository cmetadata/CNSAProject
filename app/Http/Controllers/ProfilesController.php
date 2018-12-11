<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
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
        return view('profile.index');
    }

    /**
     * Show the form for creating a new admin resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAdmin($adminId)
    {
        //This returns the view which allows the user to create a new admin profile
        return view('profiles.createAdmin');
    }

    /**
     * Show the from for creating a new coach resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCoach($adminId)
    {
        //This returns the view which allows the user to create a new coach profile
        return view('profiles.createCoach');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCoach(ProfilesController $request)
    {
        //Validating the data
        $this->validate(request(), [
            'firstName'   => 'required|max:40',
            'lastName'    => 'required|max:40',
            'schoolId'    => 'required',
            'yearEntered' => 'required',
            'position'    => 'required'
        ]);

        //USED FOR TESTING
        //dd($request);
        
        //dd(request()->all());

        //dd(request(['firstName', 'lastName']));

        //Creating a new player object and populating it // THIS IS A TEMPORARY FIX UNTIL MODEL IS CREATED
        $player = new Player;

        $player->firstName = $request->firstName;

        $player->lastName = $request->lastName;
        
        $player->yearEntered = $request->yearEntered;

        $player->playerRating = $request->playerRating;

        $player->position = $request->position;

        $player->schoolId = $request->schoolId;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAdmin(ProfilesController $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the admin profile.
     *
     * @param  \App\Profiles $profileId
     * @return \Illuminate\Http\Response
     */
    public function editAdmin(adminId $profileId)
    {
        //
    }

    /**
     * Show the form for editing the coaches profile.
     *
     * @param  \App\Profiles $profileId
     * @return \Illuminate\Http\Response
     */
    public function editCoach(coachId $profileId)
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
