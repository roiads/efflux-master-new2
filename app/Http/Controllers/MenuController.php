<?php
namespace App\Http\Controllers;
use App\menu;
use Illuminate\Http\Request;

class MenuController extends Controller {
	public function index() {
		return menu::all();
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(menu $menu) {
		return $menu;
	}
	public function edit(menu $menu) {}
	public function update(Request $request, menu $menu) {}
	public function destroy(menu $menu) {}
}
