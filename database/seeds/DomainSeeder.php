<?php

use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder {
 public function run() {
  DB::table('efflux_assets.domains')->insertOrIgnore([[
   'id'         => 1,
   'name'       => 'efflux.com',
   'path'       => '/home/ploi/efflux.com/',
   'server_id'  => 1,
   'ssl'        => 1,
   'repository' => 'https://github.com/nickolastuttle/Efflux-Master.git',
  ], [
   'id'         => 2,
   'name'       => 'dev.efflux.com',
   'path'       => '/home/ploi/dev.efflux.com/',
   'server_id'  => 2,
   'ssl'        => 1,
   'repository' => 'https://github.com/nickolastuttle/Efflux-Master.git',
  ], [
   'id'         => 3,
   'name'       => 'sevenbars.com',
   'path'       => '/home/ploi/sevenbars.com/',
   'server_id'  => 3,
   'ssl'        => 1,
   'repository' => 'https://github.com/nickolastuttle/Efflux-Content.git',
  ], [
   'id'         => 4,
   'name'       => 'dev.sevenbars.com',
   'path'       => '/home/ploi/dev.sevenbars.com/',
   'server_id'  => 4,
   'ssl'        => 1,
   'repository' => 'https://github.com/nickolastuttle/Efflux-Content.git',
  ], [
   'id'         => 5,
   'name'       => 'getavio.com',
   'path'       => null,
   'server_id'  => 4,
   'ssl'        => 0,
   'repository' => null,
  ], [
   'id'         => 6,
   'name'       => 'test4dough.com',
   'path'       => null,
   'server_id'  => 4,
   'ssl'        => 0,
   'repository' => 'https://github.com/nickolastuttle/t4d.git',
  ], [
   'id'         => 7,
   'name'       => 'butcherbox.best',
   'path'       => '/home/ploi/butcherbox.best/',
   'server_id'  => 5,
   'ssl'        => 1,
   'repository' => 'https://github.com/nickolastuttle/Efflux-ButcherBox.git',
  ]]);
 }
}