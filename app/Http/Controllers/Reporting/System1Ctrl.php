<?php

namespace App\Http\Controllers\Reporting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Reporting\System1;

class System1Ctrl extends Controller {
 public function index() {
  return System1::all();
 }
 public function store(Request $request) {}
 public function show($id) {}
 public function update(Request $request, $id) {}
 public function destroy($id) {}
 /**
  * report
  * Get the Report for System1 And save to 'efflux_track'.'api_system1'
  *
  * @param String $type
  * @return void
  */
 public function report($type = 'subid') {
  $url  = 'https://' . env('SYSTEM1_REPORTING_URL') . $type . '.json';
  $q    = 'auth_key=' . env('SYSTEM1_KEY');
  $file = file_get_contents($url . '?' . $q);
  $file = json_decode($file);
  return $file;
 }
 public function summary($type = 'subid') {
  $r = $this->report($type);
  if (empty($r)) {
   exit('No Report Found...');
  }

  for ($i = 1; $i < count($r); $i++) {
   $Q = System1::updateOrCreate([
    'date'            => $r[$i][0],
    'campaign_domain' => $r[$i][1],
    'subid'           => $r[$i][2],
   ], [
    'date'            => $r[$i][0],
    'campaign_domain' => $r[$i][1],
    'subid'           => $r[$i][2],
    'mobile'          => $r[$i][4],
    'mobile_unique'   => $r[$i][8],
    'desktop'         => $r[$i][5],
    'desktop_unique'  => $r[$i][9],
    'searches'        => $r[$i][11],
    'clicks'          => $r[$i][12],
    'revenue'         => $r[$i][13],
   ]
   );
  }
  return 'complete';
 }
}