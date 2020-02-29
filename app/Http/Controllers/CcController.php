<?php
namespace App\Http\Controllers;
use App\cc;
use Illuminate\Http\Request;

class CcController extends Controller {
	public function index() {
		return cc::all();
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(cc $cc) {
		return $cc;
	}
	public function edit(cc $cc) {}
	public function update(Request $request, cc $cc) {}
	public function destroy(cc $cc) {}
}
