<?php
namespace App\Http\Controllers;
use App\content_page;
use App\user;
use Illuminate\Http\Request;

class ContentPageController extends Controller {
	public function index() {
		if(user::admin())
			$r = content_page::paginate(10);
		else
			$r = user::find(Auth::id())->domains()->paginate(10);
		return response()->json($r);
	}
	public function create() {

	}
	public function store(Request $request) {

	}
	public function show(content_page $page) {
		return $page;
	}
	public function edit(content_page $page) {

	}
	public function update(Request $request, content_page $page) {

	}
	public function destroy(content_page $page) {
		
	}
}
