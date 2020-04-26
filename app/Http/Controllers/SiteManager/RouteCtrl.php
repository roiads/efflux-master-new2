<?php
namespace App\Http\Controllers\SiteManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\SiteManager\Route;

class RouteCtrl extends Controller {
 public function index(Request $R) {
  return Route::with('post', 'page')->get();
 }
 public function show(Route $X) {
  return $X;
 }
 public function create() {
  return 'CREATED Route';
 }
 public function update(Request $R, Route $X) {
  return 'UPDATED Route';
 }
 public function destroy(Route $X) {
  return 'DELETED Route';
 }
}