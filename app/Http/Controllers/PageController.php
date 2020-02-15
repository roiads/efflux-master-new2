<?php

namespace App\Http\Controllers;

use App\page;
use Illuminate\Http\Request;

class PageController extends Controller {
  public function index() {
    $pages = page::all();
    return $pages;
  }
  public function create() {

  }
  public function store(Request $request) {

  }
  public function show($id) {
    $page = page::find($id);
    return $page;
  }
  public function edit($id) {

  }
  public function update(Request $request, $id) {

  }
  public function destroy($id) {

  }
}
