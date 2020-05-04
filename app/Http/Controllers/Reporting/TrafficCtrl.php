<?php

namespace App\Http\Controllers\Reporting;

use App\Http\Controllers\Controller;
use \App\Models\Tracker\Traffic;

class TrafficCtrl extends Controller {
 public function makeReport() {
  $traffic = Traffic::all();
  return $traffic;
 }
}