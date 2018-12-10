<?php

namespace App\Http\Controllers;

use App\Scholarship;
use App\ScholarshipLog;
use Illuminate\Http\Request;

class ScholarshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //Holds the value of all incidents to be displayed
        $scholarships = Scholarship::all();


        $i = 0;
        foreach ($scholarships as $scholarship)
        {
            $scholarshipNames[$i] = Scholarship::find($scholarship->scholarshipId);
            $i += 1;
        }


        return view('scholarships.index', compact('scholarships', 'scholarshipNames'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('scholarships.create');
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
            'scholarshipName' => 'required|max:50',
        ]);

        $scholarships = new Scholarship;

        $scholarships->scholarshipName = $request->scholarshipName;

        $scholarships->scholarshipAmount = $request->scholarshipAmount;
 
        $scholarships->save();

        //Flashing a message to confirm that a team has been entered into the database
        session()->flash('message', 'scholarships has been inserted');                        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(Scholarship $scholarship)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(Scholarship $scholarship)
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
    public function update(Request $request, Scholarship $scholarship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $scholarship = Scholarship::find($request->scholarshipId);
        $scholarship->delete();
        return redirect('/scholarships')->with('success', 'Scholarship Deleted');
    }
}
