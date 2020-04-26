<?php
namespace App\Http\Controllers\Assets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Assets\Proxy;

class ProxyCtrl extends Controller {
 public function index(Request $R) {
  return Proxy::all();
 }
 public function show(Proxy $X) {
  return $X;
 }
 public function create() {
  return 'CREATED Proxy';
 }
 public function update(Request $R, Proxy $X) {
  return 'UPDATED Proxy';
 }
 public function destroy(Proxy $X) {
  return 'DELETED Proxy';
 }
}