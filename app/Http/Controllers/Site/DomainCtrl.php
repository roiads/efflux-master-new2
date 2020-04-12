<?php
namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\site_domain as domain;

class DomainCtrl extends Controller {
 public function __construct() {}
 public function index() {
  $r = domain::paginate(10);
  return response()->json($r);
 }
 public function create() {}
 public function store(Request $R) {}
 public function show(domain $domain) {
  return $domain;
 }
 public function edit(domain $domain) {}
 public function update(Request $R, domain $domain) {}
 public function destroy(domain $domain) {}
}