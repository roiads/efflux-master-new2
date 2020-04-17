<?php
namespace App\Http\Controllers\Entourage;
use App\entourage_account as account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountCtrl extends Controller {
 public function __construct() {}
 public function index() {
  $r = account::paginate(10);
  return response()->json($r);
 }
 public function create() {}
 public function store(Request $R) {}
 public function show(account $account) {
  return $account;
 }
 public function edit(account $account) {}
 public function update(Request $R, account $account) {}
 public function destroy(account $account) {}
}