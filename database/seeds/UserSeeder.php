<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
 public function run() {
  DB::table('efflux_users.users')->insertOrIgnore([
   ['id' => 1, 'username' => 'admin', 'email' => 'admin@digittopia.com', 'password' => Hash::make('admin')],
   ['id' => 2, 'username' => 'creator', 'email' => 'creator@digittopia.com', 'password' => Hash::make('creator')],
   ['id' => 3, 'username' => 'buyer', 'email' => 'buyer@digittopia.com', 'password' => Hash::make('buyer')],
   ['id' => 4, 'username' => 'entourage', 'email' => 'entourage@digittopia.com', 'password' => Hash::make('entourage')],
   ['id' => 5, 'username' => 'guest', 'email' => 'guest@digittopia.com', 'password' => Hash::make('guest')],
  ]);
  DB::table('efflux_users.user_domain')->insertOrIgnore([
   ['id' => 1, 'user_id' => 1, 'domain_id' => 3],
   ['id' => 2, 'user_id' => 1, 'domain_id' => 7],
   ['id' => 3, 'user_id' => 2, 'domain_id' => 3],
   ['id' => 4, 'user_id' => 2, 'domain_id' => 7],
  ]);
  DB::table('efflux_users.user_entourage')->insertOrIgnore([
   ['id' => 1, 'user_id' => 1, 'profile_id' => 1],
   ['id' => 2, 'user_id' => 1, 'profile_id' => 2],
   ['id' => 3, 'user_id' => 2, 'profile_id' => 1],
   ['id' => 4, 'user_id' => 2, 'profile_id' => 2],
  ]);
 }
}