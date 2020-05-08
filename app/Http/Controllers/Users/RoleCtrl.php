<?php
namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use App\Models\Users\Role;
use Illuminate\Http\Request;

class RoleCtrl extends Controller {
	
	/*
	* Fetch All Roles
	*/
	public function index(Request $request) {
		if($request->ajax()) {
			try {
				$roles = Role::all();

				$response = ['success' => true, 'roles' => $roles];

			} catch(\Exception $ex) {
				$response = ['success' => false];
			}

			return $response;
		}
	}

	public function create() {

	}
	
	public function store(Request $request) {

	}

	public function show(Role $role) {
		return $role;
	}

	public function edit(Role $role) {

	}

	public function update(Request $request, Role $role) {

	}

	public function destroy(Role $role) {

	}
}