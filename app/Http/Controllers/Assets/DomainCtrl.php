<?php
namespace App\Http\Controllers\Assets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\assets_domain as x;

class DomainCtrl extends Controller {
 public function index() {
  $Q = x::with('server')->where('status', '>', 0)->paginate(10);
  return response()->json($Q);
 }
 public function show(x $x) {
  return $x;
 }
 public function create() {}
 public function update(Request $R, x $x) {}
 public function destroy(x $x) {}
}