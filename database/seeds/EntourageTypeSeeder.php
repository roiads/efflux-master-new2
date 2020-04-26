<?php

use Illuminate\Database\Seeder;

class EntourageTypeSeeder extends Seeder {
 public function run() {
  DB::table('efflux_entourage.types')->insertOrIgnore([
   ['id' => 1, 'name' => 'gmail'],
   ['id' => 2, 'name' => 'outlook'],
   ['id' => 3, 'name' => 'spotify'],
   ['id' => 4, 'name' => 'system1'],
  ]);
 }
}