<?php
namespace App\Http\Controllers;
use App\cc;
use App\user;
use Illuminate\Http\Request;

class CcController extends Controller {
	public function index() {
		if(user::admin())
			$r = cc::paginate(10);
		else
			$r = user::find(Auth::id())->accounts()->paginate(10);
		return response()->json($r);
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
