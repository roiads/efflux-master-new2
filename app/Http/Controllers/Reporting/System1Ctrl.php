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
  $report = $this->report($type);
  if (empty($report)) {
   exit('No Report Found...');
  }

  for ($i = 1; $i < count($report); $i++) {
   $Q = System1::updateOrCreate([
    'date'            => $report[$i][0],
    'campaign_domain' => $report[$i][1],
    'subid'           => $report[$i][2],
   ], [
    'date'            => $report[$i][0],
    'campaign_domain' => $report[$i][1],
    'subid'           => $report[$i][2],
    'mobile'          => $report[$i][3],
    'mobile_unique'   => $report[$i][7],
    'desktop'         => $report[$i][4],
    'desktop_unique'  => $report[$i][8],
    'searches'        => $report[$i][10],
    'clicks'          => $report[$i][11],
    'revenue'         => $report[$i][12],
   ]
   );
  }
  return 'complete';
 }
}