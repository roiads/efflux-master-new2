<?php
namespace App\Http\Controllers;
use App\page;
use App\user;
use Illuminate\Http\Request;

class PageController extends Controller {
	public function index() {
		if(user::admin())
			$r = page::paginate(10);
		else
			$r = user::find(Auth::id())->domains()->paginate(10);
		return response()->json($r);
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(page $page) {
		return $page;
	}
	public function edit(Request $request, $id) {
		$post = $request->all();
		$postUpdate = page::find($id);
		$postUpdate->html = $post['html'];
		$postUpdate->css = $post['css'];
		$state = $postUpdate->save();
		return Response()->json(array('success' => $state), $state ? 200 : 400);
	}
	public function update(Request $request, page $page) {}
	public function destroy(page $page) {}
}
