<?php
Auth::routes();
Route::put('content/post/{id}', 'PostController@edit');
Route::put('content/post/metadata/{id}', 'PostController@editMetadata');
Route::middleware(['auth'])->group(function () {
    Route::view('/admin/{page?}', 'admin');
    Route::resource('account/cc', 'CcController');
    Route::resource('account/profile', 'ProfileController');
    Route::resource('account/type', 'AccountTypeController');
    Route::resource('account', 'AccountController');
    Route::resource('campaign', 'CampaignController');
    Route::resource('content/page', 'PageController');
    Route::resource('content/post', 'PostController');
    Route::resource('domain/registrar', 'RegistrarController');
    Route::resource('domain/route', 'RouteController');
    Route::resource('domain', 'DomainController');
    Route::resource('user', 'UserController');
});
Route::view('/{page?}', 'welcome');