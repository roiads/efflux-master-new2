<?php
namespace App\Http\Controllers\Entourage;
use App\entourage_spendsource as source;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpendsourceCtrl extends Controller {
 public function __construct() {}
 public function index() {
  $r = source::paginate(10);
  return response()->json($r);
 }
 public function create() {}
 public function store(Request $R) {}
 public function show(source $source) {
  return $source;
 }
 public function edit(source $source) {}
 public function update(Request $R, source $source) {}
 public function destroy(source $source) {}
}