<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider {
	public function register() {
    
  }
	public function boot() {
    Paginator::defaultView('vendor.pagination.default');
    Paginator::defaultSimpleView('vendor.pagination.simple-default');
	}
}
