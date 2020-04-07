<?php
namespace App\Http\Controllers\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\content_domain;
use \App\user;

class DomainCtrl extends Controller {

 /**
  * Instantiate a new controller instance.
  *
  * @return void
  */
 public function __construct() {
  // CREATE MIDDLEWARE FOR EACH USER ROLE
  // THIS NEEDS SITE/SERVER PERMISSIONS
 }
 public function index() {
  if (user::admin()) {
   $r = content_domain::paginate(10);
  } else {
   $r = user::find(Auth::id())->domains()->paginate(10);
  }

  return response()->json($r);
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create() {
  //
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request) {
  //
 }

 /**
  * Display the specified resource.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function show(content_domain $domain) {
  return $domain;
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function edit(content_domain $domain) {

 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, content_domain $domain) {

 }
 /**
  * Remove the specified resource from storage.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function destroy(content_domain $domain) {

 }
}