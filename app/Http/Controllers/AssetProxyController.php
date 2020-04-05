<?php
namespace App\Http\Controllers;
use App\asset_proxy;
use Illuminate\Http\Request;

class AssetProxyController extends Controller {
	public function index() {
		return asset_proxy::all();
	}
	public function create() {

	}
	public function store(Request $request) {

	}
	public function show(asset_proxy $proxy) {
		return $proxy;
	}
	public function edit(asset_proxy $proxy) {
		
	}
	public function update(Request $request, asset_proxy $proxy) {

	}
	public function destroy(asset_proxy $proxy) {

	}
}
