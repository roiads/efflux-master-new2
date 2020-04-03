<?php
namespace App\Http\Controllers;
use App\domain;
use App\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DomainController extends Controller {

	public function __construct(){
		// CREATE MIDDLEWARE FOR EACH USER ROLE
		// THIS NEEDS SITE/SERVER PERMISSIONS
	}
	public function index() {
		if(user::admin())
			$r = domain::paginate(10);
		else
			$r = user::find(Auth::id())->domains()->paginate(10);
		return response()->json($r);
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
