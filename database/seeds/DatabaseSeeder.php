<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
 public function run() {
  $this->call([
   UserSeeder::class,
   RoleSeeder::class,
   ServerSeeder::class,
   DomainSeeder::class,
  ]);
 }
}