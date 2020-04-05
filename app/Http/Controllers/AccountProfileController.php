<?php
namespace App\Http\Controllers;
use App\account_profile;
use App\user;
use App\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountProfileController extends Controller {
	public function index() {
		$r = profile::paginate(10);
		return response()->json($r);
	}
	public function create() {

	}
	public function store(Request $request) {

	}
	public function show(account_profile $profile) {
		return $profile;
	}
	public function edit(account_profile $profile) {

	}
	public function update(Request $request, account_profile $profile) {

	}
	public function destroy(account_profile $profile) {

	}
}
