<?php

Route::middleware(['auth'])->group(function () {
	Route::view('/admin/{page?}', 'admin');
	Route::view('/admin/{page}/{subpage?}', 'admin');
	Route::resource('account', 'AccountController');
	Route::resource('page', 'PageController');
	Route::resource('campaign', 'CampaignController');
	Route::resource('domain', 'DomainController');
	Route::resource('route', 'RouteController');
	Route::resource('page', 'PageController');
	Route::resource('user', 'UserController');
  Route::resource('payment', 'CcController');
});
Auth::routes();
Route::view('/{page?}', 'welcome');