<?php

namespace App\Http\Controllers\Reporting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Reporting\System1;

class System1Ctrl extends Controller {

 public function index() {
  $s1 = System1::select('domain');
  $s1 = $s1->addSelect(DB::raw('sum(`sessions`) as `sessions`'));
  $s1 = $s1->addSelect(DB::raw('sum(`unique`) as `unique`' ) );
  $s1 = $s1->addSelect(DB::raw('sum(`sessions_mobile`) as `mobile`'));
  $s1 = $s1->addSelect(DB::raw('sum(`sessions_desktop`) as `desktop`'));
  $s1 = $s1->addSelect(DB::raw('sum(`revenue`) as `revenue`'));
   $s1 = $s1->whereDate('date', '>=', today()->subDays(30))
   ->where('subid', NULL)
   ->groupBy('domain')
   ->orderBy('domain')
   ->get();
   return $s1;
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