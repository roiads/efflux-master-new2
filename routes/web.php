<?php


Auth::routes();
Route::view('/admin/{page?}', 'admin');
Route::middleware('auth')->resource('account/cc', 'CcController');
Route::middleware('auth')->resource('account/profile', 'ProfileController');
Route::middleware('auth')->resource('account/type', 'AccountTypeController');
Route::middleware('auth')->resource('account', 'AccountController');
Route::middleware('auth')->resource('campaign', 'CampaignController');
Route::middleware('auth')->resource('content/menu', 'MenuController');
Route::middleware('auth')->resource('content/page', 'PageController');
Route::middleware('auth')->resource('content/post', 'PostController');
Route::middleware('auth')->resource('domain/registrar', 'RegistrarController');
Route::middleware('auth')->resource('domain/route', 'RouteController');
Route::middleware('auth')->resource('domain', 'DomainController');
Route::middleware('auth')->resource('user/roles', 'RoleController');
Route::middleware('auth')->resource('user', 'UserController');
Route::view('/{page?}', 'welcome');