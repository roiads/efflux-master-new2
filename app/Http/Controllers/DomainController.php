<?php

namespace App\Http\Controllers;

use App\domain;
use Illuminate\Http\Request;

class DomainController extends Controller {
	public function index() {
		$domains = domain::all();
		return $domains;
	}
	public function create() {

	}
	public function store(Request $request) {

	}
	public function show($id) {
		$domain = domain::find($id);
		return $domain;
	}
	public function edit($id) {

	}
	public function update(Request $request, $id) {

	}
	public function destroy($id) {

	}
}
