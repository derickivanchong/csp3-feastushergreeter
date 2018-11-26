<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\User;

class TeamController extends Controller
{
	function displayTeam () {

		$teams = Team::all();

		return view('teams.teams', compact('teams'));
	}

	function addTeam(Request $request) {
		$this->validate($request, [
    		'teamname' => 'required',
    		'teamdes' => 'required',
    	]);
		$team = new Team;

		$team->name_of_team = $request->teamname;
		$team->description = $request->teamdes;

		if(isset($request->teamimage)){
		$team->image_path = $request->teamimage;
		} else {
			$team->image_path = '/img/imgteam/no-image.jpg';
		}

		$team->save();

		return redirect('/teams');

	}

	function edit($id){
		$team = Team::find($id);
		return view('teams.edit_team', compact('team'));
	}

	function save(Request $request, $id){
		$team = Team::find($id);
		$team->name_of_team = $request->editteamname;
		$team->description = $request->editteamdescription;

		if ($request->hasFile('editteamimage')){
			$extension = $request->editteamimage->getClientOriginalExtension();
			$request->editteamimage->move('img/imgteam/', "$team->name_of_team.$extension");
			$team->image_path = "img/imgteam/$team->name_of_team.$extension";
		}

		$team->save();
		return redirect('/teams');
	}

	function delete($id){
		$team = Team::find($id);
		$team->delete();

		return redirect('/teams');
	}

	function displayTeamMember($id) {

		$team = Team::find($id);
		$teams = Team::all();

		return view('teams.teammember', compact('team', 'teams'));
	}

	function moveUser(Request $request, $id){

		$user = User::find($id);

		// dd($id);
		
		$user->team_id = $request->chooseteam;

		$user->save();

		return redirect('/teams');

		// dd($user);
	}

	//For displaying users

	function displayUser () {

		$users = User::all();

		return view('users.allusers', compact('users'));
	}
}
