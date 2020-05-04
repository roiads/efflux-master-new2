<?php

namespace App\Http\Controllers\Reporting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Reporting\System1;

class System1Ctrl extends Controller {

 public function index() {
  return System1::whereDate('date', '>=', today()->subDays(7))
   ->orderBy('date', 'desc')
   ->get();
 }
 public function store(Request $R) {
  $data = $R->validate([
   'domain' => 'required',
   'date'   => 'required',
  ]);
  return response('System1 API data has been saved...', 422);
 }
 public function show(System1 $s1) {
  return $s1->find($s1);
 }
 public function update(Request $R, System1 $s1) {
  $data = $R->validate([
   'id'     => 'required',
   'domain' => 'required',
   'date'   => 'required',
  ]);

 }
 public function destroy(System1 $s1) {
  $s1->delete();
 }
}