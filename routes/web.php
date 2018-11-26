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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
	return view('hello');
});

Route::get('/tungkolsakin', function () {
	return view('about.me');
});

Route::get('/job', function () {
	return view('job.job');
});


//Teams
Route::get('/teams', "TeamController@displayTeam");

Route::get('/teammember/{id}', "TeamController@displayTeamMember");

// Teams -> User
Route::get('/users', "TeamController@displayUser");

//Roles
Route::get('/roles', "RoleController@displayRole");


Route::group(['middleware' => 'admin'], function() {

Route::get('/teams/edit/{id}', "TeamController@edit");
Route::post('/addTeams', "TeamController@addTeam");
Route::patch('teams/edit/{id}', "TeamController@save");
Route::delete('/teams/delete{id}', "TeamController@delete");
Route::post('/teams/moveuser/{id}', "TeamController@moveUser");
Route::post('/addRoles', "RoleController@addRole");
Route::get('/roles/edit/{id}', "RoleController@edit");
Route::patch('roles/edit/{id}', "RoleController@save");
Route::delete('/roles/delete/{id}', "RoleController@delete"); //not being used for the moment

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
