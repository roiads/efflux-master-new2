<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\user;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller {
 use RegistersUsers;
 protected $redirectTo = RouteServiceProvider::HOME;
 public function __construct() {
  $this->middleware('guest');
 }
 protected function validator(array $data) {
  return Validator::make($data, [
   'name'     => ['required', 'string', 'max:100'],
   'email'    => ['required', 'string', 'email', 'max:100', 'unique:mysql.efflux_users.users'],
   'password' => ['required', 'string', 'min:4', 'confirmed'],
  ]);
 }
 protected function create(array $data) {
  list($firstname, $lastname) = @explode(' ', $data['name'], 2);
  return user::forceCreate([
   'firstname' => $firstname,
   'lastname'  => $lastname,
   'email'     => $data['email'],
   'username'  => $data['email'],
   'password'  => Hash::make($data['password']),
   'api_token' => Str::random(80),
  ]);
 }
}