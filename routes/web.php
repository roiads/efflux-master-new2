<?php
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::view('/admin/{page?}', 'admin');
    Route::resource('account/spendsource', 'AccountSpendsourceController');
    Route::resource('account/profile', 'AccountProfileController');
    Route::resource('account/type', 'AccountTypeController');
    Route::resource('account', 'AccountController');
    Route::resource('content/page', 'ContentPageController');
    Route::resource('content/post', 'ContentPostController');
    Route::put('content/post/metadata/{id}', 'ContentPostController@updateMetadata');
    Route::resource('content/route', 'ContentRouteController');
    Route::resource('content/domain', 'ContentDomainController');
    Route::resource('user', 'UserController');
});
Route::view('/{page?}', 'welcome');