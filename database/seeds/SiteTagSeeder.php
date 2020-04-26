<?php

use Illuminate\Database\Seeder;

class SiteTagSeeder extends Seeder {
 public function run() {
  DB::table('efflux_site.tags')->insertOrIgnore([
   ['id' => 1, 'name' => 'Main', 'status' => 1, 'tagline' => NULL, 'image_id' => NULL],
   ['id' => 2, 'name' => 'Trending', 'status' => 1, 'tagline' => NULL, 'image_id' => NULL],
   ['id' => 3, 'name' => 'Latest', 'status' => 1, 'tagline' => NULL, 'image_id' => NULL],
   ['id' => 4, 'name' => 'Popular', 'status' => 1, 'tagline' => NULL, 'image_id' => NULL],
   ['id' => 5, 'name' => 'Finance & Real Estate', 'status' => 1, 'tagline' => 'Listen. Solve.', 'image_id' => 1],
   ['id' => 6, 'name' => 'Health & Fitness', 'status' => 1, 'tagline' => 'Eat right, be bright.', 'image_id' => 7],
   ['id' => 7, 'name' => 'Automotive', 'status' => 1, 'tagline' => 'The Road Should Never be the Same', 'image_id' => 20],
   ['id' => 8, 'name' => 'Technology', 'status' => 1, 'tagline' => 'Simple Solutions for Complex Connections', 'image_id' => 26],
   ['id' => 9, 'name' => 'Travel', 'status' => 1, 'tagline' => 'Amazing Places to Visit', 'image_id' => 31],
   ['id' => 10, 'name' => 'Lifestyle', 'status' => 1, 'tagline' => 'Create Your Own Opportunities', 'image_id' => 39],
  ]);
 }
}