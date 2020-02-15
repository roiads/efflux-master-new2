<?php

namespace App\Http\Controllers;

use App\route;
use Illuminate\Http\Request;

class RouteController extends Controller {
  public function index() {
    $routes = route::all();
    return $routes;
  }
  public function create() {

  }
  public function store(Request $request) {

  }
  public function show($id) {
    $route = route::find($id);
    return $route;
  }
  public function edit($id) {

  }
  public function update(Request $request, $id) {

  }
  public function destroy($id) {

  }
}
