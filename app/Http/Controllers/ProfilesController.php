<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile/index');
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
    public function store(ProfilesController $request)
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
