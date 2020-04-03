<?php
namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {
	public function __construct(){
		// CREATE MIDDLEWARE FOR EACH USER ROLE
		// THIS NEEDS USERS PERMISSIONS
	}
	public function index() {
		if(!user::admin())
			return response('Permission Denied... ',401);
		$r = user::paginate(10);
		return response()->json($r);
	}
	public function create(Request $request) {
		Validator::make($request->all(), [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:mysql.users.users'],
			'password' => ['required', 'string', 'min:8', 'confirmed'],
		])->validate();
		return user::create([
			'first_name' => $request['name'],
			'email' => $request['email'],
			'username' => $request['email'],
			'password' => Hash::make($request['password']),
		]);
	}
	public function store(Request $request) {}
	public function show(user $user) {
		return $user;
	}
	public function edit(user $user) {}
	public function update(Request $request, user $user) {}
	public function destroy(user $user) {}
}