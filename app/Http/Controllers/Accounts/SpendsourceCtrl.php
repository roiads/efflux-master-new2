<?php
namespace App\Http\Controllers\Accounts;
use App\account_spendsource;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Http\Request;

class SpendsourceCtrl extends Controller {

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
  $r = account_spendsource::paginate(10);
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
 public function show(account_spendsource $source) {
  return $cc;
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function edit(account_spendsource $source) {

 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, account_spendsource $source) {

 }
 /**
  * Remove the specified resource from storage.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function destroy(account_spendsource $source) {

 }
}