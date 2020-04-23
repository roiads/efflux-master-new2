<?php

namespace App\Http\Controllers;

use App\reports_system1;
use Illuminate\Http\Request;

class System1Ctrl extends Controller {
 public function index() {}
 public function store(Request $request) {}
 public function show($id) {}
 public function update(Request $request, $id) {}
 public function destroy($id) {}
 /**
  * report
  * Get the Report for System1 And save to 'efflux_track'.'system1_$type'
  *
  * @param String $type
  * @return void
  */
 public function system1($type = null) {
  $url  = 'https://' . env('SYSTEM1_REPORTING_URL') . $type . '.json';
  $q    = 'auth_key=' . env('SYSTEM1_KEY');
  $file = file_get_contents($url . '?' . $q);
  $file = json_decode($file);

  if (empty($file)) {
   return 'failed to connect to system1...';
  }

  for ($i = 1; $i <= count($file); $i++) {
   reports_system1::updateOrInsert(
    ['date' => $file[0]],
    [
     'campaign_domain' => '2',
    ]
   );

  }

  return $r;
 }
}