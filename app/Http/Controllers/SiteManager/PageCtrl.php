<?php
namespace App\Http\Controllers\SiteManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\SiteManager\Page;

class PageCtrl extends Controller {
 public function index(Request $R) {
  $pages = Page::with('domains', 'routes');
  if ($R->status) {
   $pages = $pages->where('status', $R->status);
  }
  $pages = $pages->get();
  return $pages;
 }
 public function show(Page $X) {
  return $X->with('domains', 'routes');
 }
 public function create() {
  return 'CREATED Page';
 }
 public function update(Request $R, Page $X) {
  $X->title       = $R->title;
  $X->description = $R->description;
  $X->excerpt     = $R->excerpt;

  $X = $X->save();
  return $X;
 }
 public function destroy(Page $X) {
  return 'DELETED Page';
 }
}