<?php
namespace App\Http\Controllers\Assets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\asset_proxy as x;

class ProxyCtrl extends Controller {
 public function index() {
  return x::all();
 }
 public function show(x $x) {
  return $x;
 }
 public function create() {}
 public function update(Request $R, x $x) {}
 public function destroy(x $x) {}
}