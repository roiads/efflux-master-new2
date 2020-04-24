<?php
namespace App\Http\Controllers\Assets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\assets_domain as assets_domain;

class DomainCtrl extends Controller {
 public function index() {
  $Q = assets_domain::with('server')->where('status', '>', 0)->paginate(10);
  return response()->json($Q);
 }
 public function search($args = null) {
  $Q = assets_domain::with('server');
  foreach ($args as $k => $v) {
   $Q = $Q->where($k, (key($v) ?? '='), ($v[key($v)] ?? $v));
  }
  $Q = $Q->get();
  return response()->json($Q);
 }
 public function show(assets_domain $domain, $id = null) {
  return $domain->find($id);
 }
 public function create() {}
 public function update(Request $R, x $domain) {}
 public function destroy(assets_domain $domain) {}
}