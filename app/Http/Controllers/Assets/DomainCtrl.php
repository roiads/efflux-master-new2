<?php
namespace App\Http\Controllers\Assets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\assets_domain as x;

class DomainCtrl extends Controller {
 public function index(Request $r) {
  $Q = x::with('server')->where('status', '>', 0);
  if ($r->type) {
   $Q = $Q->where('type', '=', $r->type);
  }
  $Q = $Q->paginate(10);
  return response()->json($Q);
 }
 public function search($args = null) {
  $Q = x::with('server');
  foreach ($args as $k => $v) {
   $Q = $Q->where($k, (key($v) ?? '='), ($v[key($v)] ?? $v));
  }
  $Q = $Q->get();
  return response()->json($Q);
 }
 public function show(x $x, $id = null) {
  $result = $x->where('name', '=', $id)->orWhere('id', '=', $id)->first();
  return response()->json($result);

 }
 public function create() {
  return view('pages.v');
 }
 public function update(Request $R, x $x) {}
 public function destroy(x $x) {}
}