<?php
namespace App\Http\Controllers;
use App\profile;
use Illuminate\Http\Request;

class ProfileController extends Controller {
	public function index() {
		$profiles = profile::select('id', 'firstname', 'lastname')
			->orderBy('id')
			->get();
		return $profiles;
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(profile $profile) {
		return $profile;
	}
	public function edit(profile $profile) {}
	public function update(Request $request, profile $profile) {}
	public function destroy(profile $profile) {}
}
