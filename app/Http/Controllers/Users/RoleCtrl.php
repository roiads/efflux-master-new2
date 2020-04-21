<?php
namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use App\user_role;
use Illuminate\Http\Request;

class RoleCtrl extends Controller {
 public function index() {
  return user_role::all();
 }
 public function create() {}
 public function store(Request $request) {}
 public function show(user_role $role) {
  return $role;
 }
 public function edit(user_role $role) {}
 public function update(Request $request, user_role $role) {}
 public function destroy(user_role $role) {}
}