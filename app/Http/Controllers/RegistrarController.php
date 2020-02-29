<?php
namespace App\Http\Controllers;
use App\registrar;
use Illuminate\Http\Request;

class RegistrarController extends Controller {
	public function index() {
		return registrar::all();
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(registrar $registrar) {
		return $registrar;
	}
	public function edit(registrar $registrar) {}
	public function update(Request $request, registrar $registrar) {}
	public function destroy(registrar $registrar) {}
}
