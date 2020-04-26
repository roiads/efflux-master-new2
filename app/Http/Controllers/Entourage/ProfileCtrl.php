<?php
namespace App\Http\Controllers\Entourage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Entourage\Profile;

class ProfileCtrl extends Controller {
 public function index(Request $R) {
  return Profile::all();
 }
 public function show(Profile $X) {
  return $X;
 }
 public function create() {
  return 'CREATED Profile';
 }
 public function update(Request $R, Profile $X) {
  return 'UPDATED Profile';
 }
 public function destroy(Profile $X) {
  return 'DELETED Profile';
 }
}