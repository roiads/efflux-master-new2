<?php
namespace App\Http\Controllers;
use App\domain;
use Illuminate\Http\Request;

class DomainController extends Controller {
	public function index() {
		return domain::all();
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(domain $domain) {
		return $domain;
	}
	public function edit(domain $domain) {}
	public function update(Request $request, domain $domain) {}
	public function destroy(domain $domain) {}
}
