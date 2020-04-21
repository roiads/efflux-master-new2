<?php
namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserCtrl extends Controller {
 public function index() {
  return user::admin() ? response()->json(user::with('roles')->paginate(10)) : response('Permission Denied... ', 401);
 }
 public function create(Request $request) {
  Validator::make($request->all(), [
   'name'     => ['required', 'string', 'max:100'],
   'email'    => ['required', 'string', 'email', 'max:100', 'unique:mysql.efflux_users.users'],
   'password' => ['required', 'string', 'min:4', 'confirmed'],
  ])->validate();
  list($fisrtname, $lastname) = @explode(' ', $request['name'], 2);
  return user::create([
   'fisrtname' => $fisrtname,
   'lastname'  => $lastname,
   'email'     => $request['email'],
   'username'  => $request['email'],
   'password'  => Hash::make($request['password']),
  ]);
 }
 public function store(Request $request) {}
 public function show($id) {
  $r = user::with('roles')->find($id);
  return response()->json($r);
 }
 public function edit(user $user) {}
 public function update(Request $request, user $user) {}
 public function destroy(user $user) {}
}