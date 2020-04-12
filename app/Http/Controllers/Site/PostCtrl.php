<?php
namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\site_post;
use Illuminate\Http\Request;

class PostCtrl extends Controller {
 public function __construct() {}
 public function index() {
  $r = site_post::paginate(10);
  return response()->json($r);
 }
 public function create() {}
 public function store(Request $R) {}
 public function show(site_post $post) {
  return $post;
 }
 public function edit(Request $R, site_post $post) {}
 public function updateMetadata(Request $R, site_post $post) {
  $post->title       = $R->title;
  $post->description = $R->description;
  $post->excerpt     = $R->excerpt;
  $result            = $post->save();
  $status            = $result ? 200 : 400;
  return Response()->json(['success' => $result], $status);
 }
 public function update(Request $R, site_post $post) {
  $post->body = $R->body;
  $result     = $post->save();
  $status     = $result ? 200 : 400;
  return Response()->json(['success' => $result], $status);
 }
 public function destroy(site_post $post) {}
}