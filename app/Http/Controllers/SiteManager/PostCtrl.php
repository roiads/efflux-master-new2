<?php
namespace App\Http\Controllers\SiteManager;
use App\Http\Controllers\Controller;
use App\site_post as post;
use Illuminate\Http\Request;

class PostCtrl extends Controller {
 public function index() {
  $r = post::with('routes')->get();
  return response()->json($r);
 }
 public function create() {}
 public function store(Request $R) {}
 public function show($id) {
  $post = post::with('routes')->find($id);
  return $post;
 }
 public function edit(Request $R, post $post) {}
 public function updateMetadata(Request $R, post $post) {
  $post->title       = $R->title;
  $post->description = $R->description;
  $post->excerpt     = $R->excerpt;
  $result            = $post->save();
  $status            = $result ? 200 : 400;
  return Response()->json(['success' => $result], $status);
 }
 public function update(Request $R, post $post) {
  $post->body = $R->body;
  $result     = $post->save();
  $status     = $result ? 200 : 400;
  return Response()->json(['success' => $result], $status);
 }
 public function destroy(post $post) {}
}