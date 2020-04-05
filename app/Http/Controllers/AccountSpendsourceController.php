<?php
namespace App\Http\Controllers;
use App\account_spendsource;
use App\user;
use Illuminate\Http\Request;

class AccountSpendsourceController extends Controller {
	public function index() {
		if(user::admin())
			$r = account_spendsource::paginate(10);
		else
			$r = user::find(Auth::id())->accounts()->paginate(10);
		return response()->json($r);
	}
	public function create() {

	}
	public function store(Request $request) {

	}
	public function show(account_spendsource $source) {
		return $cc;
	}
	public function edit(account_spendsource $source) {

	}
	public function update(Request $request, account_spendsource $source) {

	}
	public function destroy(account_spendsource $source) {
		
	}
}
