<?php
namespace App\Http\Controllers\SiteManager;
use App\Http\Controllers\Controller;
use App\site_tag as tag;
use Illuminate\Http\Request;

class TagCtrl extends Controller {
 public function index() {
  return tag::all();
 }
 public function create() {}
 public function store(Request $r) {}
 public function show(tag $tag) {}
 public function edit(tag $tag) {}
 public function update(Request $r, tag $tag) {}
 public function destroy(tag $tag) {}
}