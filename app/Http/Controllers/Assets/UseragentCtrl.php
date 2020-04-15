<?php

namespace App\Http\Controllers\Assets;

use App\asset_useragent;
use App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UseragentCtrl extends Controller {

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
  //
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
 public function show(asset_useragent $asset_useragent) {
  //
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function edit(asset_useragent $asset_useragent) {
  //
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, asset_useragent $asset_useragent) {
  //
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function destroy(asset_useragent $asset_useragent) {
  //
 }
}