<?php
namespace App\Http\Controllers;
use App\page;
use Illuminate\Http\Request;

class PageController extends Controller {
	public function index() {
		return page::all();
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(page $page) {
		return $page;
	}
	public function edit(page $page) {}
	public function update(Request $request, page $page) {}
	public function destroy(page $page) {}
}
