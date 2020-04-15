<?php
namespace App\Http\Controllers\Content;
use App\content_post;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostCtrl extends Controller {

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
   $r = content_post::paginate(10);
  } else {
   $r = user::find(Auth::id())->posts()->paginate(10);
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
 public function show(post $post) {
  return $post;
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function edit(Request $request, $id) {

 }
 public function updateMetadata(Request $request, $id) {
  $post                    = $request->all();
  $postUpdate              = content_post::find($id);
  $postUpdate->title       = $post['title'];
  $postUpdate->description = $post['description'];
  $postUpdate->excerpt     = $post['excerpt'];
  $state                   = $postUpdate->save();
  return Response()->json(array('success' => $state), $state ? 200 : 400);
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, $id) {
  $post             = $request->all();
  $postUpdate       = content_post::find($id);
  $postUpdate->body = $post['body'];
  $state            = $postUpdate->save();
  return Response()->json(array('success' => $state), $state ? 200 : 400);

 }
 /**
  * Remove the specified resource from storage.
  *
  * @param  \App\asset_useragent  $asset_useragent
  * @return \Illuminate\Http\Response
  */
 public function destroy(post $post) {

 }
}