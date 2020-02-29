<?php
namespace App\Http\Controllers;
use App\role;
use Illuminate\Http\Request;

class RoleController extends Controller {
	public function index() {
		return role::all();
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(role $role) {
		return $role;
	}
	public function edit(role $role) {}
	public function update(Request $request, role $role) {}
	public function destroy(role $role) {}
}
