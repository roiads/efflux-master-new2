<?php
namespace App\Http\Controllers\Assets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\assets_server as x;

class ServerCtrl extends Controller {
 public function index() {
  $Q = x::paginate(10)
   ->toJson();
  return $Q;
 }
 public function show(x $x) {
  return $x;
 }
 public function create() {}
 public function update(Request $R, x $x) {}
 public function destroy(x $x) {}
}