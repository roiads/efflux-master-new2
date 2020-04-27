<?php

namespace App\Http\Controllers\Reporting;

use Illuminate\Http\Request;

class ReportsCtrl extends Controller {
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
  return $r;
 }
}