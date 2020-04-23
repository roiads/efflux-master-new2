<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\reports_system1;

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
 public function report($type = null) {
  $url  = 'https://' . env('SYSTEM1_REPORTING_URL') . $type . '.json';
  $q    = 'auth_key=' . env('SYSTEM1_KEY');
  $file = file_get_contents($url . '?' . $q);
  $file = json_decode($file);
  if (empty($file)) {
   return 'failed to connect to system1...';
  }
  for ($i = 1; $i <= count($file); $i++) {
   reports_system1::updateOrInsert(
    [
     'date'            => $file[$i][0],
     'campaign_domain' => $file[$i][1],
    ],
    [
     'mobile'         => $file[$i][3],
     'mobile_unique'  => $file[$i][7],
     'desktop'        => $file[$i][4],
     'desktop_unique' => $file[$i][8],
     'searches'       => $file[$i][10],
     'clicks'         => $file[$i][11],
     'revenue'        => $file[$i][12],
    ]
   );

  }

  return $r;
 }
}