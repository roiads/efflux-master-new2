<?php
Route::middleware(['auth'])->group(function () {
	Route::view('/admin/{page?}', 'admin');
	Route::resource('account/cc', 'CcController');
	Route::resource('account/profile', 'ProfileController');
	Route::resource('account', 'AccountController');
	Route::resource('campaign', 'CampaignController');
	Route::resource('content/menu', 'MenuController');
	Route::resource('content/page', 'PageController');
	Route::resource('content/post', 'PostController');
	Route::resource('domain/registrar', 'RegistrarController');
	Route::resource('domain/route', 'RouteController');
	Route::resource('domain', 'DomainController');
	Route::resource('user/roles', 'RoleController');
	Route::resource('user', 'UserController');
});
Auth::routes();
Route::view('/{page?}', 'welcome');