<?php
namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserCtrl extends Controller {
 public function __construct() {
  // CREATE MIDDLEWARE FOR EACH USER ROLE
  // THIS NEEDS USERS PERMISSIONS
 }
 public function index() {
  return user::admin() ? response()->json(user::with('roles')->paginate(10)) : response('Permission Denied... ', 401);
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
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

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request) {
  //
 }

 /**
  * Display the specified resource.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function show($id) {
  $r = user::with('roles')->find($id);
  return response()->json($r);
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function edit(user $user) {

 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, user $user) {

 }
 /**
  * Remove the specified resource from storage.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function destroy(user $user) {

 }
}