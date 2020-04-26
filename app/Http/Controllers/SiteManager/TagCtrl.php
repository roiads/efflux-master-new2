<?php
namespace App\Http\Controllers\SiteManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\SiteManager\Tag;

class TagCtrl extends Controller {
 public function index(Request $R) {
  return Tag::with('domain', 'posts', 'pages')->all();
 }
 public function show(Tag $X) {
  return $X;
 }
 public function create() {
  return 'CREATED Tag';
 }
 public function update(Request $r, Tag $X) {
  return 'UPDATED Tag';
 }
 public function destroy(Tag $X) {
  return 'DELETED Tag';
 }
}