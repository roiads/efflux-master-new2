<?php
namespace App\Http\Controllers;
use App\account;
use Illuminate\Http\Request;

class AccountController extends Controller {
	public function index() {
		return account::all();
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(account $account) {
		return $account;
	}
	public function edit(account $account) {}
	public function update(Request $request, account $account) {}
	public function destroy(account $account) {}
}
