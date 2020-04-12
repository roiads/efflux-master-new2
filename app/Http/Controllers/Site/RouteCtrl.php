<?php
namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\site_route;
use Illuminate\Http\Request;

class RouteCtrl extends Controller {
 public function __construct() {}
 public function index() {
  $r = site_route::paginate(10);
  return response()->json($r);
 }
 public function create() {}
 public function store(Request $R) {}
 public function show(site_route $route) {
  return $route;
 }
 public function edit(site_route $route) {}
 public function update(Request $R, site_route $route) {}
 public function destroy(site_route $route) {}
}