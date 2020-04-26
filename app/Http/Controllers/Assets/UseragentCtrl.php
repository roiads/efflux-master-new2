<?php
namespace App\Http\Controllers\Assets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Assets\Useragent;

class UseragentCtrl extends Controller {
 public function index(Request $R) {
  return Useragent::all();
 }
 public function show(Useragent $X) {
  return $X;
 }
 public function create() {
  return 'CREATED Useragent';
 }
 public function update(Request $R, Useragent $X) {
  return 'UPDATED Useragent';
 }
 public function destroy(Useragent $X) {
  return 'DELETED Useragent';
 }
}