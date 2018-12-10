<?php

use App\Player;
use App\Coach;
use App\Game;
use App\Incident;
use App\Injury;
use App\Team;
use App\User;


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
// Route::get('/players/{playerId}', function($playerId) {
// 	$player = Player::find($playerId);
// 	return view('players.show', compact('player'));
// });

//Public, Coaches and Admin
//Displaying a list of players
Route::get('/players', 'PlayersController@index');

Route::get('/player_stat/create', 'PlayerStatController@create');

Route::post('/players', 'PlayersController@store');

Route::post('/player_stat', 'PlayerStatController@store');

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

Route::post('/coaches', 'CoachesController@store');


//Public, Coaches and Admin
//Displays a certains coaches information
//Route::get('/coaches/{coachId}', 'CoachesController@show');
Route::get('/coaches/{coachId}', function($coachId) {
	$coach = Coach::find($coachId);
	return view('coach.show', compact('coach'));
});

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

//Store
Route::post('/teams', 'TeamsController@store');

//Public, Coaches and Admin
//Displays a teams roster 


//Route::get('/teams/{teamId}', 'TeamsController@show');
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

Route::post('/games', 'GamesController@store');

//Coaches and Admins
//Adds a game
Route::get('/games/create', 'GamesController@create');

//Public, Coaches and Admin
//Displays a particular coaches information
Route::get('/games/{gameId}', 'GamesController@show');

//Coaches and Admins
//Allows to change information relating to the game
Route::get('/games/{gameId}/edit', 'GamesController@edit');

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

//Admin
//Allows adding schools
Route::get('/schools/create', 'SchoolsController@create');

//Public, Coaches and Admin
//Displays a particular schools information
Route::get('/schools/{schoolId}', 'SchoolsController@show');

// POST (http mode post) route to /schools, calls store function
Route::post('/schools', 'SchoolsController@store');

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

Route::post('/stadiums', 'StadiumsController@store');

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
//INCIDENTS
//--------------------------------------------------------
//--------------------------------------------------------
//Shows a list of injuries sustained by the students
Route::get('/incidents', 'IncidentsController@index');

Route::post('/incidents', 'IncidentsController@store');

//Allows adding a injury 
Route::get('/incidents/create', 'IncidentsController@create');

//Allows editing of an injury
Route::get('/incidents/{incidentId}/edit', 'IncidentsController@edit');

//Displays a particular stadiums information
Route::get('/incidents/{incidentId}', 'IncidentsController@show');

//Admin
//Deletes the injury information
Route::get('/incidents/{incidentId}/delete', 'IncidentsController@delete');



//--------------------------------------------------------
//--------------------------------------------------------
//INCIDENTS_LOG
//--------------------------------------------------------
//--------------------------------------------------------
//Adds a new scholarship
Route::get('/incidents_log/create', 'IncidentsLogController@create');

//Deletes a scholarship item
Route::post('/incidents_log', 'IncidentsLogController@store');



//--------------------------------------------------------
//--------------------------------------------------------
//INJURIES
//--------------------------------------------------------
//--------------------------------------------------------
//Public, Coaches and Admin
//Shows a list of injuries sustained by the students
Route::get('/injuries', 'InjuriesController@index');

Route::post('/injuries', 'InjuriesController@store');

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
Route::get('/injuries/{injuryId}/delete', 'InjuriesController@destroy');



//--------------------------------------------------------
//--------------------------------------------------------
//INJURIES_LOG
//--------------------------------------------------------
//--------------------------------------------------------
//Adds a new scholarship
Route::get('/injuries_log/create', 'InjuriesLogController@create');

//Deletes a scholarship item
Route::post('/injuries_log', 'InjuriesLogController@store');


//--------------------------------------------------------
//--------------------------------------------------------
//SCHOLARSHIPS
//--------------------------------------------------------
//--------------------------------------------------------
//Coaches and Admin
//Shows information about a particular scholarship
Route::get('/scholarships', 'ScholarshipsController@index');

Route::post('/scholarships', 'ScholarshipsController@store');

//Coaches and Admin
//Adds a new scholarship
Route::get('/scholarships/create', 'ScholarshipsController@create');


//Coaches and Admin
//Allows editing of an injury
Route::get('/scholarships/{scholarshipId}/edit', 'ScholarshipsController@edit');

//Coaches and Admin
//Displays a particular stadiums information
Route::get('/scholarships/{scholarshipId}', 'ScholarshipsController@show');

//Admin
//Deletes the injury information
Route::get('/scholarships/{scholarshipId}/delete', 'ScholarshipsController@delete');




//--------------------------------------------------------
//--------------------------------------------------------
//SCHOLARSHIPS_LOG
//--------------------------------------------------------
//--------------------------------------------------------
//Adds a new scholarship
Route::get('/scholarships_log/create', 'ScholarshipsLogController@create');

//Deletes a scholarship item
Route::post('/scholarships_log', 'ScholarshipsLogController@store');




//////////////////////////////////////////////////////////////////


//////////////////// AUTH ROUTES /////////////////////////////////



//////////////////////////////////////////////////////////////////
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/login', 'HomeController@');


//--------------------------------------------------------
//--------------------------------------------------------
//MIDDLEWARE
//--------------------------------------------------------
//--------------------------------------------------------

//Groups all admin related routes hopefully doesnt blow up our site fingers crossed !! 
Route::group(['middleware' =>'App\Http\Middleware\AdminMiddleware'], function())
{
	Route::match(['get', 'post'], '/adminOnlyPages/', 'HomeController@admin');
}

//Groups all coaches related routes hopefully doesnt blow up our site fingers crossed !!
Route::group(['middleware' => 'App\Http\Middleware\CoachMiddleware'], function())
{
	Route::match(['get', 'post'], '/coachOnlyPages/', ' HomeController@coach');
}

//--------------------------------------------------------
//--------------------------------------------------------
//ORGANIZATIONS
//--------------------------------------------------------
//--------------------------------------------------------
//organizations
//Displays a list of organizations
Route::get('/organizations', 'OrganizationsController@index');

//organizations
//Adds a new organizations
Route::get('/organizations/create', 'OrganizationsController@create');

Route::post('/organizations', 'OrganizationsController@store');

//Public, Coaches and Admin
//Displays a particular organizations information
Route::get('/organizations/{organizationId}', 'OrganizationsController@show');

//Public, Coaches and Admin
//Allows editing a organizations information 
Route::get('/organizations/{organizationId}/edit', 'OrganizationsController@edit');

//Admin
//Deletes the organizations information
Route::get('/organizations/{organizationId}/delete', 'OrganizationsController@delete');


//--------------------------------------------------------
//--------------------------------------------------------
//Persons
//--------------------------------------------------------
//--------------------------------------------------------
//Persons
//Displays a list of Persons
Route::get('/persons', 'PersonsController@index');

//Persons
//Adds a new Persons
Route::get('/persons/create', 'PersonsController@create');

Route::post('/persons', 'PersonsController@store');

//Public, Coaches and Admin
//Displays a particular Persons information
Route::get('/persons/{personId}', 'PersonsController@show');

//Public, Coaches and Admin
//Allows editing a Persons information 
Route::get('/persons/{personId}/edit', 'PersonsController@edit');

//Admin
//Deletes the Persons information
Route::get('/persons/{personId}/delete', 'PersonsController@delete');


//--------------------------------------------------------
//--------------------------------------------------------
//Positions
//--------------------------------------------------------
//--------------------------------------------------------
//Positions
//Displays a list of Positions
Route::get('/positions', 'PositionsController@index');

//Positions
//Adds a new Positions
Route::get('/positions/create', 'PositionsController@create');

Route::post('/positions', 'PositionsController@store');

//Public, Coaches and Admin
//Displays a particular Positions information
Route::get('/positions/{positionId}', 'PositionsController@show');

//Public, Coaches and Admin
//Allows editing a Positions information 
Route::get('/positions/{positionId}/edit', 'PositionsController@edit');

//Admin
//Deletes the Positions information
Route::get('/positions/{positionId}/delete', 'PositionsController@delete');


//Register/Login
Route::get('/register', 'Auth\RegisterController@create');
Route::post('/register', 'Auth\RegisterController@store');

Route::get('/login', 'Auth\LoginController@create');
Route::post('/login', 'Auth\LoginController@store');