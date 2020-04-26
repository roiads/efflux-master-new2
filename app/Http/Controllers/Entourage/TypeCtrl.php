<?php
namespace App\Http\Controllers\Entourage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Entourage\Type;

class TypeCtrl extends Controller {
 public function index(Request $R) {
  return Type::all();
 }
 public function show(Type $X) {
  return $X;
 }
 public function create() {
  return 'CREATED Type';
 }
 public function update(Request $R, Type $X) {
  return 'UPDATED Type';
 }
 public function destroy(Type $X) {
  return 'DELETED Type';
 }
}