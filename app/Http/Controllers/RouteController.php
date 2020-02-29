<?php
namespace App\Http\Controllers;
use App\route;
use Illuminate\Http\Request;

class RouteController extends Controller {
	public function index() {
		return route::all();
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(route $route) {
		return $route;
	}
	public function edit(route $route) {}
	public function update(Request $request, route $route) {}
	public function destroy(route $route) {}
}
