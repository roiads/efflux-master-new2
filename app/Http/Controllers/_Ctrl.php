<?php
namespace App\Http\Controllers\__GROUP__;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\__GROUP__\__NAME__;

class __NAME__Ctrl extends Controller {
 public function index() {
  return __NAME__::all();
 }
 public function show(__NAME__ $__NAME__) {
  return $__NAME__;
 }
 public function create() {
  return 'CREATED __NAME__';
 }
 public function update(Request $R, __NAME__ $__NAME__) {
  return 'UPDATED __NAME__';
 }
 public function destroy(__NAME__ $__NAME__) {
  return 'DELETED __NAME__';
 }
}