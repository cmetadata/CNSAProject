<?php

namespace App\Http\Controllers;

use App\Injury;
use App\InjuryLog;
use Illuminate\Http\Request;

class InjuriesLogController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('injuries.log.create');
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
            'playerId' => 'required',
            'injuryId' => 'required',
            //'gameId' => 'required',
            'injuryDate' => 'required',
        ]);

        $injuries = new InjuryLog;

        $injuries->playerId = $request->playerId;

        $injuries->injuryId = $request->injuryId;

        $injuries->gameId = $request->gameId;

        $injuries->injuryDate = $request->injuryDate;
 
        $injuries->save();

        //Flashing a message to confirm that a team has been entered into the database
        session()->flash('message', 'injuries has been inserted');                        
    }

}
