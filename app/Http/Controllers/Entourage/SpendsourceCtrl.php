<?php
namespace App\Http\Controllers\Entourage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Entourage\Spendsource;

class SpendsourceCtrl extends Controller {
 public function index(Request $R) {
  return Spendsource::all();
 }
 public function show(Spendsource $X) {
  return $X;
 }
 public function create() {
  return 'CREATED Spendsource';
 }
 public function update(Request $R, Spendsource $X) {
  return 'UPDATED Spendsource';
 }
 public function destroy(Spendsource $X) {
  return 'DELETED Spendsource';
 }
}