<?php
namespace App\Http\Controllers\SiteManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\SiteManager\Post;

class PostCtrl extends Controller {
 public function index(Request $R) {
  $X = Post::with('domain', 'routes', 'image', 'images', 'tags');
  if ($R->status) {
   $X = $X->where('status', $R->status);
  }
  return $X->get();
 }
 public function show($id) {
  $X = Post::with('domain', 'routes', 'image', 'images', 'tags')->where('id', $id)->first();
  return $X;
 }
 public function create() {
  return 'CREATED Post';
 }
 public function update(Request $R, Post $X) {
  $X->title       = $R->title;
  $X->description = $R->description;
  $X->excerpt     = $R->excerpt;

  $X = $X->save();
  return $X;
 }
 public function destroy(Post $X) {
  return 'DELETED Post';
 }
}