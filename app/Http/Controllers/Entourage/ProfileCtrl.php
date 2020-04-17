<?php
namespace App\Http\Controllers\Entourage;
use App\entourage_profile as profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileCtrl extends Controller {
 public function __construct() {}
 public function index() {
  $r = profile::with('accounts')->paginate(15);
  return response()->json($r);
 }
 public function create() {}
 public function store(Request $R) {}
 public function show(profile $profile) {
  return $profile;
 }
 public function edit(profile $profile) {}
 public function update(Request $R, profile $profile) {}
 public function destroy(profile $profile) {}
}