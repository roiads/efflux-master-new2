<?php
namespace App\Http\Controllers;
use App\profile;
use App\user;
use App\account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller {
	public function index() {
		if (!user::admin()) {
			$r = profile::paginate(10);
		}else{
			$r = profile::paginate(10);
			//$accounts = profile::with(['accounts' => function ($q) {
			//	$q->whereIn('users', [Auth::id()]);
			//}])->get();
    }
		return response()->json($r);
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(profile $profile) {
		return $profile;
	}
	public function edit(profile $profile) {}
	public function update(Request $request, profile $profile) {}
	public function destroy(profile $profile) {}
}
