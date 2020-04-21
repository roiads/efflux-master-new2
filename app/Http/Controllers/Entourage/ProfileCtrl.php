<?php
namespace App\Http\Controllers\Entourage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\entourage_profile as x;

class ProfileCtrl extends Controller {
 public function index() {
  $Q = x::with('accounts')
   ->paginate(15)
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