<?php
namespace App\Http\Controllers\Entourage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Entourage\Account;

class AccountCtrl extends Controller {
 public function index(Request $R) {
  $r = Account::with('profile');
  if ($R->profile_id) {
   $r = $r->where('profile_id', $R->profile_id)->get();
  }
  return $r;
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