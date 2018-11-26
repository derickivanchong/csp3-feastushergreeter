<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
	function displayRole(){
		$roles = Role::all();

		return view('roles.roles', compact('roles'));
	}

	function addRole(Request $request) {
		$this->validate($request, [
			'rolename' => 'required',
		]);
		$role = new Role;

		$role->name_of_role = $request->rolename;

		// if(isset($request->rolepicture)){
		// $team->image_path = $request->rolepicture;
		// } else {
		// 	$team->image_path = '/img/imgteam/noimage.jpg';
		// }

		$role->save();

		return redirect('/roles');

	}

	function edit($id){
		$role = Role::find($id);
		return view('roles.edit_role', compact('role'));
	}

	function save(Request $request, $id){
		$role = Role::find($id);
		$role->name_of_role = $request->editteamrole;

		if ($request->hasFile('editroleimage')){
			$extension = $request->editroleimage->getClientOriginalExtension();
			$request->editroleimage->move('img/imgroles/', "$role->name_of_role.$extension");
			$role->image_path = "img/imgroles/$role->name_of_role.$extension";
		}

		$role->save();
		return redirect('/roles');
	}

	function delete($id){
		$role = Role::find($id);
		$role->delete();

		return redirect('/roles');
	}

}
