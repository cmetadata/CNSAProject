<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//--------------------------------------------------------
//--------------------------------------------------------
//HOME
//--------------------------------------------------------
//--------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
})->name('home');

//--------------------------------------------------------
//--------------------------------------------------------
//CONTACT US 
//--------------------------------------------------------
//--------------------------------------------------------
Route::get('/contact', function () {
	return view('contact');
});

//--------------------------------------------------------
//--------------------------------------------------------
//ABOUT
//--------------------------------------------------------
//--------------------------------------------------------
Route::get('/about', function () {
	return view('about');
});

//--------------------------------------------------------
//--------------------------------------------------------
//PROFILES
//--------------------------------------------------------
//--------------------------------------------------------
//Admin
//Creates a new admin profile
Route::get('/adminProfile/create', 'ProfilesController@createAdmin');

//Admin
//Creates a new coaches profile
Route::get('/coachProfile/create', 'ProfilesController@createCoach');

//Admin 
//Displays the admins profile
Route::get('/adminProfile/{adminId}', 'ProfilesController@indexAdmin');

//Admin
//Displays the coaches profile
Route::get('/coachProfile/{coachId}', 'ProfilesController@indexCoach');

//Admin
//Allows editing of admin profile
Route::get('/adminProfile/edit', 'ProfilesController@editAdmin');

//Admin
//Allows editing of coach profile
Route::get('/coachProfile/edit', 'ProfilesController@editCoach');

//--------------------------------------------------------
//--------------------------------------------------------
//PLAYERS
//--------------------------------------------------------
//--------------------------------------------------------
//Coaches and Admin
//Creates a new player 


Route::get('/players/create', 'PlayersController@create');

//??????????????
//Displays a particular players information
Route::get('/players/{playerId}', 'PlayersController@show');

//Public, Coaches and Admin
//Displaying a list of players
Route::get('/players', 'PlayersController@index');

//Public, Coaches and Admin
//Editing a players information
Route::get('/players/{playerId}/edit', 'PlayersController@edit');

//Admin
//Deletes the school information
Route::get('/players/{playerId}/delete', 'PlayersController@delete');


//--------------------------------------------------------
//--------------------------------------------------------
//COACHES
//--------------------------------------------------------
//--------------------------------------------------------
//Public, Coaches and Admin
//Displays a list of coaches 
Route::get('/coaches', 'CoachesController@index');

//Admin
//Creates a new coach
Route::get('/coaches/create', 'CoachesController@create');

//Public, Coaches and Admin
//Displays a certains coaches information
Route::get('/coaches/{coachId}', 'CoachesController@show');

//Admin
//Edits a coach
Route::get('/coaches/{coachId}/edit', 'CoachesController@edit');

//Admin
//Deletes the school information
Route::get('/coaches/{coachId}/delete', 'CoachesController@delete');


//--------------------------------------------------------
//--------------------------------------------------------
//TEAM
//--------------------------------------------------------
//--------------------------------------------------------
//Public, Coaches and Admin
//Displays a list of teams
Route::get('/teams', 'TeamsController@index');

//Admin
//Creates a team
Route::get('/teams/create', 'TeamsController@create');

//Public, Coaches and Admin
//Displays a teams roster 
Route::get('/teams/{teamId}', 'TeamsController@show');

//Coaches
//Allows a coach to edit their team
Route::get('/teams/{teamId}/edit', 'TeamsController@edit');

//Admin
//Deletes the school information
Route::get('/teams/{teamId}/delete', 'TeamsController@delete');


//--------------------------------------------------------
//--------------------------------------------------------
//GAMES
//--------------------------------------------------------
//--------------------------------------------------------
//Public, Coaches and Admin
//Displays the list of coaches
Route::get('/games', 'GamesController@index');

//Public, Coaches and Admin
//Displays a particular coaches information
Route::get('/games/{gameId}', 'GamesController@show');

//Coaches and Admins
//Allows to change information relating to the game
Route::get('/games/{gameId}/edit', 'GamesController@edit');

//Coaches and Admins
//Adds a game
Route::get('/games/create', 'GamesController@create');

//Admin
//Deletes the game information
Route::get('/games/{gameId}/delete', 'GamesController@delete');


//--------------------------------------------------------
//--------------------------------------------------------
//SCHOOLS
//--------------------------------------------------------
//--------------------------------------------------------
//Public, Coaches and Admin
//Displays a list of schools
Route::get('/schools', 'SchoolsController@index');

//Public, Coaches and Admin
//Displays a particular schools information
Route::get('/schools/{schoolId}', 'SchoolsController@show');

//Admin
//Allows adding schools
Route::get('/schools/create', 'SchoolsController@create');

//Admin
//Allows editing schools information
Route::get('/schools/{schoolId}/edit', 'SchoolsController@edit');

//Admin
//Deletes the school information
Route::get('/schools/{schoolId}/delete', 'SchoolsController@delete');

//--------------------------------------------------------
//--------------------------------------------------------
//STADIUMS
//--------------------------------------------------------
//--------------------------------------------------------
//Public, Coaches and Admin
//Displays a list of stadiums
Route::get('/stadiums', 'StadiumsController@index');

//Coaches and Admin
//Adds a new school
Route::get('/stadiums/create', 'StadiumsController@create');

//Public, Coaches and Admin
//Displays a particular stadiums information
Route::get('/stadiums/{stadiumId}', 'StadiumsController@show');

//Public, Coaches and Admin
//Allows editing a stadiums information 
Route::get('/stadiums/{stadiumId}/edit', 'StadiumsController@edit');

//Admin
//Deletes the stadium information
Route::get('/stadiums/{stadiumId}/delete', 'StadiumsController@delete');

//--------------------------------------------------------
//--------------------------------------------------------
//INJURIES
//--------------------------------------------------------
//--------------------------------------------------------
//Public, Coaches and Admin
//Shows a list of injuries sustained by the students
Route::get('/injuries', 'InjuriesController@index');

//Coaches and Admin
//Allows adding a injury 
Route::get('/injuries/create', 'InjuriesController@create');

//Coaches and Admin
//Allows editing of an injury
Route::get('/injuries/{injuryId}/edit', 'InjuriesController@edit');

//Coaches and Admin
//Displays a particular stadiums information
Route::get('/injuries/{injuryId}', 'InjuriesController@show');

//Admin
//Deletes the injury information
Route::get('/injuries/{injuryId}/delete', 'InjuriesController@delete');

//--------------------------------------------------------
//--------------------------------------------------------
//SCHOLARSHIPS
//--------------------------------------------------------
//--------------------------------------------------------
//Coaches and Admin
//Shows information about a particular scholarship
Route::get('/scholarships', 'ScholarshipsController@show');

//Coaches and Admin
//Adds a new scholarship
Route::get('/schoalarships/create', 'ScholarshipsController@create');

//Coaches and Admin
//Deletes a scholarship item
Route::get('/scholarships/delete', 'ScholarshipsController@delete');

