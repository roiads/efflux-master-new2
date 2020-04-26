<?php
namespace App\Http\Controllers\Assets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Assets\Server;

class ServerCtrl extends Controller {
 public function index(Request $R) {
  $Q = Server::paginate(10)
   ->toJson();
  return $Q;
 }
 public function show(Server $X) {
  return $X->with('domains');
 }
 public function create() {
  return 'CREATED Server';
 }
 public function update(Request $R, Server $X) {
  return 'UPDATED Server';
 }
 public function destroy(Server $X) {
  return 'DELETED Server';
 }
}