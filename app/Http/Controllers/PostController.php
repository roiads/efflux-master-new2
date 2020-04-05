<?php
namespace App\Http\Controllers;
use App\post;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller {
	public function index() {
		if(user::admin())
			$r = post::paginate(10);
		else
			$r = user::find(Auth::id())->posts()->paginate(10);

		return response()->json($r);
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(post $post) {
		return $post;
	}
	public function edit(Request $request, $id) {
		$post = $request->all();
		$postUpdate = post::find($id);
		$postUpdate->html = $post['html'];
		$postUpdate->css = $post['css'];
		$state = $postUpdate->save();
		return Response()->json(array('success' => $state), $state ? 200 : 400);
	}
	public function editMetadata(Request $request, $id) {
		$post = $request->all();
		$postUpdate = post::find($id);
		$postUpdate->title = $post['title'];
		$postUpdate->description = $post['description'];
		$postUpdate->excerpt = $post['excerpt'];
		$state = $postUpdate->save();
		return Response()->json(array('success' => $state), $state ? 200 : 400);
	}
	public function update(Request $request, post $post) {}
	public function destroy(post $post) {}
}
