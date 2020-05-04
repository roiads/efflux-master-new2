<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider {
 public const HOME = '/admin/dashboard';
 public function boot() {
  parent::boot();
  Route::model('user', App\User::class);
 }
 public function map() {
  $this->mapApiRoutes();
  $this->mapDataRoutes();
  $this->mapWebRoutes();
 }
 protected function mapWebRoutes() {
  Route::middleware('web')
   ->namespace('App\Http\Controllers')
   ->group(base_path('routes/web.php'));
 }
 protected function mapApiRoutes() {
  Route::prefix('api')
   ->middleware('api')
   ->namespace('App\Http\Controllers')
   ->group(base_path('routes/api.php'));
 }
 protected function mapDataRoutes() {
  Route::prefix('data')
   ->middleware('api')
   ->namespace('App\Charts')
   ->group(base_path('routes/data.php'));
 }
}