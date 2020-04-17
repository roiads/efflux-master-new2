<?php
namespace App\Http\Controllers\Entourage;
use App\account_type as type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeCtrl extends Controller {
 public function __construct() {}
 public function index() {
  $r = type::withCount('accounts')->paginate(10);
  return response()->json($r);
 }
 public function create() {}
 public function store(Request $R) {}
 public function show(type $type) {
  return $type;
 }
 public function edit(type $type) {}
 public function update(Request $R, type $type) {}
 public function destroy(type $type) {}
}