<?php
namespace App\Http\Controllers\Assets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Assets\Domain;

class DomainCtrl extends Controller {
 public function index(Request $R) {
  $Q = Domain::with('server', 'routes', 'posts', 'pages', 'tags', 'images');
  if ($R->type) {
   $Q = $Q->where('type', '=', $R->type);
  }
  return $Q->get();
 }
 public function show($id) {
  return Domain::with('server', 'routes', 'posts', 'pages', 'tags', 'images')->where('id', $id)->orWhere('name', $id)->first();
 }
 public function create() {
  return 'CREATED Domain';
 }
 public function update(Request $R, Domain $X) {
  return 'UPDATED Domain';
 }
 public function destroy(Domain $X) {
  return 'DELETED Domain';
 }
}