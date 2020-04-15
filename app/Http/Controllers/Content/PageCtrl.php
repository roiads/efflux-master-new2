<?php
namespace App\Http\Controllers\Content;
use App\content_page;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Http\Request;

class PageCtrl extends Controller {

 /**
  * Instantiate a new controller instance.
  *
  * @return void
  */
 public function __construct() {
  // Additional Middleware here../
 }

 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index() {
  if (user::admin()) {
   $r = content_page::paginate(10);
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
 public function show(content_page $page) {
  return $page;
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function edit(content_page $page) {

 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, content_page $page) {

 }
 /**
  * Remove the specified resource from storage.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function destroy(content_page $page) {

 }
}