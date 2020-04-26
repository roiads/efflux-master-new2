<?php
namespace App\Http\Controllers\SiteManager;
use App\Http\Controllers\Controller;
use App\site_page;
use Illuminate\Http\Request;

class PageCtrl extends Controller {
 public function __construct() {}
 public function index() {
  $r = site_page::paginate(10);
  return response()->json($r);
 }
 public function create() {}
 public function store(Request $R) {}
 public function show(site_page $page) {
  return $page;
 }
 public function edit(site_page $page) {}
 public function update(Request $R, site_page $page) {}
 public function destroy(site_page $page) {}
}