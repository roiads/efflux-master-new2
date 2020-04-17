<?php

/**
 * The main website url to access a vue-router and
 * open the corrent component layout with all options
 */
Route::prefix('content')->namespace('Content')->group(function () {
    Route::resource('page', 'PageCtrl');
    Route::resource('post', 'PostCtrl');
    Route::put('post/metadata/{id}', 'PostCtrl@updateMetadata');
    Route::resource('route', 'RouteCtrl');
    Route::resource('domain', 'DomainCtrl');
   });

Route::prefix('accounts')->namespace('Accounts')->group(function () {
    Route::resource('account', 'AccountCtrl');
    Route::resource('spendsource', 'SpendsourceCtrl');
    Route::resource('profile', 'ProfileCtrl');
    Route::resource('type', 'TypeCtrl');
    Route::resource('fb/profile', 'FbProfileCtrl');
    Route::resource('fb/adaccount', 'FbAdAccountCtrl');
    Route::resource('fb/campaign', 'FbCampaignCtrl');
    Route::resource('fb/adset', 'FbAdSetCtrl');
    Route::resource('fb/ad', 'FbAdCtrl');
    Route::resource('fb/adrecord', 'FbAdRecordCtrl');
   });

Route::middleware(['auth'])->group(function () {
    Route::view('/admin/{vue?}', 'admin');
    Route::view('/admin/{group}/{vue?}', 'admin');
    Route::view('/admin/{group}/{vue}/{id?}', 'admin');
    Route::namespace ('Users')->group(function () {
    Route::resource('user', 'UserCtrl');
 });
});

Auth::routes();
Route::view('/{page?}', 'welcome');