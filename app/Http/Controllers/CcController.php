<?php

namespace App\Http\Controllers;

use App\cc;
use Illuminate\Http\Request;

class CcController extends Controller {
  public function index() {
    $ccs = cc::all();
    return $ccs;
  }
  public function create() {

  }
  public function store(Request $request) {

  }
  public function show($id) {
    $cc = cc::find($id);
    return $cc;
  }
  public function edit($id) {

  }
  public function update(Request $request, $id) {

  }
  public function destroy($id) {

  }
}
