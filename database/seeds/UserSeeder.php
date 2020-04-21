<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder {
 public function run() {
  DB::table('efflux_users.users')->insertOrIgnore([[
   'id'        => 1,
   'username'  => 'nick',
   'email'     => 'nick@digittopia.com',
   'password'  => Hash::make('1234'),
   'firstname' => 'Nickolas',
   'lastname'  => 'Tuttle',
   'phone'     => '6196633127',
   'api_token' => Str::random(80),
  ], [
   'id'        => 2,
   'username'  => 'creator',
   'email'     => 'creator@digittopia.com',
   'password'  => Hash::make('1234'),
   'firstname' => 'Creator',
   'lastname'  => '',
   'phone'     => '',
   'api_token' => Str::random(80),
  ], [
   'id'        => 3,
   'username'  => 'buyer',
   'email'     => 'buyer@digittopia.com',
   'password'  => Hash::make('1234'),
   'firstname' => 'Buyer',
   'lastname'  => '',
   'phone'     => '',
   'api_token' => Str::random(80),
  ]]);
 }
}