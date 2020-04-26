<?php
namespace App\Http\Controllers\Assets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\assets_domain as domain;

class DomainCtrl extends Controller {
 public function index(Request $r) {
  $Q = domain::with('server', 'routes');
  if ($r->type) {
   $Q = $Q->where('type', '=', $r->type);
  }
  $Q = $Q->get();
  return $Q;
 }
 public function show($id) {
  $result = domain::with('server', 'routes')
   ->where('id', '=', $id)
   ->orWhere('name', '=', $id)
   ->first();
  return $result;

 }
 public function create() {
  return view('pages.v');
 }
 public function update(Request $R, x $x) {}
 public function destroy(x $x) {}
}