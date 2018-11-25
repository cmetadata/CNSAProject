<?php

namespace App\Http\Controllers;

use App\Scholarship;
use App\ScholarshipLog;
use Illuminate\Http\Request;

class ScholarshipsLogController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('scholarships.log.create');
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
            'scholarshipId' => 'required',
            'scholarshipDate' => 'required',
        ]);

        $scholarships = new ScholarshipLog;

        $scholarships->playerId = $request->playerId;

        $scholarships->scholarshipId = $request->scholarshipId;

        $scholarships->scholarshipDate = $request->scholarshipDate;
 
        $scholarships->save();

        //Flashing a message to confirm that a team has been entered into the database
        session()->flash('message', 'scholarships has been inserted');                        
    }

}
