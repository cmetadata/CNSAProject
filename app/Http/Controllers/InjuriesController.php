<?php

namespace App\Http\Controllers;

use App\Injury;
use App\InjuryLog;
use App\Player;
use Illuminate\Http\Request;

class InjuriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Holds the value of all injuries to be displayed
        $injuries = Injury::all();


        $i = 0;
        foreach ($injuries as $injury)
        {
            $injuryNames[$i] = Injury::find($injury->injuryId);
            $i += 1;
        }
        
        return view('injuries.index', compact('injuries', 'injuryNames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('injuries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //Validating the data
        $this->validate(request(), [
            'injury' => 'required|max:50',
        ]);

        $injuries = new Injury;

        $injuries->injury = $request->injury;
 
        $injuries->save();

        //Flashing a message to confirm that a team has been entered into the database
        session()->flash('message', 'injuries has been inserted');                

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Injury  $injury
     * @return \Illuminate\Http\Response
     */
    public function show(Injury $injury)
    {

        // WILL USE INJURY LOG


        
        // use playerscontroller show()
        // to send all() where of playerId on injury table
        // &
        // to send all() where of playerId on incident table
        
        // $injury = Injury::find($request->injuryId);

        // // must find teams by schoolId        
        // // needs to return a collection or it wont work
        // $players = Player::all()->where('playerId', $request->playerId);
        
        // //dd($school);
        // return view('players.show', compact(['injury', 'players', 'stadiums']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Injury  $Injury
     * @return \Illuminate\Http\Response
     */
    public function edit(Injury $injury)
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
    public function update(Request $request, Injury $injury)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(Injury $injury)
    {
        //
        $injuries = Injury::find($injury);
        $injuries->delete();
        return redirect('/players')->with('success', 'Injury Deleted');
    }
}
