<?php
namespace App\Http\Controllers\Entourage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Entourage\Account;

class AccountCtrl extends Controller {
 public function index(Request $R) {
  $args = $R->args ?? [];
  $r    = Account::with('profile');
  foreach ($this->parseArgs($args) as $k => $v) {
   $r = $r->where($k, $v);
  }
  return response()->json($r->get());
 }
 public function show(Account $X) {
  return $X;
 }
 public function create() {
  return 'CREATED Account';
 }
 public function update(Request $R, Account $X) {
  return 'UPDATED Account';
 }
 public function destroy(Account $X) {
  return 'DELETED Account';
 }
}