<?php
namespace App\Http\Controllers\SiteManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\SiteManager\Image;

class ImageCtrl extends Controller {
 public function index(Request $R) {
  $images = Image::with('posts', 'pages', 'domains');
  if ($R->status) {
   $images = $images->where('status', $R->status);
  }
  $images = $images->get();
  return $images;
 }
 public function show(Image $X) {
  return $X->with('posts', 'pages', 'domains');
 }
 public function create() {
  return 'CREATED Image';
 }
 public function update(Request $R, Image $X) {
  $X->title = $R->title;
  $X->alt   = $R->alt;
  $X->path  = $R->path;
  $X        = $X->save();
  return $X;
 }
 public function destroy(Image $X) {
  return 'DELETED Image';
 }
}