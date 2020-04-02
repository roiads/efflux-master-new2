<?php
namespace App\Http\Controllers;
use App\domain;
use App\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DomainController extends Controller {
	public function index() {
		$domains = user::find(Auth::id())->domains()->paginate(10);
		return response()->json($domains);
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
