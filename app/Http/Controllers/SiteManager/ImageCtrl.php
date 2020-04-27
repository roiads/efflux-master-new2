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
 public function show(Image $Image) {
  return $Image->with('posts', 'pages', 'domains');
 }
 public function create() {
  return 'CREATED Image';
 }
 public function update(Request $R, Image $Image) {
  $Image->title = $R->title;
  $Image->alt   = $R->alt;
  $Image->path  = $R->path;
  $Image        = $Image->save();
  return $Image;
 }
 public function destroy(Image $Image) {
  return 'DELETED Image';
 }
}