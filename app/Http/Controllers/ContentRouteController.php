<?php
namespace App\Http\Controllers;
use App\content_route;
use Illuminate\Http\Request;

class ContentRouteController extends Controller {
	public function index() {
		return content_route::all();
	}
	public function create() {

	}
	public function store(Request $request) {

	}
	public function show(content_route $route) {
		return $route;
	}
	public function edit(content_route $route) {

	}
	public function update(Request $request, content_route $route) {

	}
	public function destroy(content_route $route) {

	}
}
