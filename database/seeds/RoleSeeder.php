<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder {
 public function run() {
  DB::table('efflux_users.roles')->insertOrIgnore([
   ['id' => 1, 'name' => 'Admin', 'description' => 'Full Access to All'],
   ['id' => 2, 'name' => 'Creator', 'description' => 'Access to Site Manager'],
   ['id' => 3, 'name' => 'Buyer', 'description' => 'Access to Offers and Campaigns'],
   ['id' => 4, 'name' => 'Entourage', 'description' => 'Access to Efflux Entourage'],
  ]);
  DB::table('efflux_users.user_role')->insertOrIgnore([
   ['id' => 1, 'user_id' => 1, 'role_id' => 1],
   ['id' => 2, 'user_id' => 1, 'role_id' => 2],
   ['id' => 3, 'user_id' => 1, 'role_id' => 3],
   ['id' => 4, 'user_id' => 1, 'role_id' => 4],
  ]);
 }
}