<?php
namespace App\Http\Controllers;
use App\post;
use Illuminate\Http\Request;

class PostController extends Controller {
	public function index() {
		$posts = user::find(Auth::id())->posts()->paginate(10);
		return response()->json($posts);
	}
	public function create() {}
	public function store(Request $request) {}
	public function show(post $post) {
		return $post;
	}
	public function edit(post $post) {}
	public function update(Request $request, post $post) {}
	public function destroy(post $post) {}
}
