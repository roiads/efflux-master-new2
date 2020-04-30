<?php

Route::prefix('entourage')->namespace('Entourage')->group(function () {
 Route::resource('account', 'AccountCtrl');
 Route::resource('profile', 'ProfileCtrl');
 Route::resource('type', 'TypeCtrl');
});

Route::prefix('site-manager')->namespace('SiteManager')->group(function () {
 Route::resource('page', 'PageCtrl');
 Route::resource('post', 'PostCtrl');
 Route::resource('tag', 'TagCtrl');
 Route::resource('image', 'ImageCtrl');
 Route::resource('route', 'RouteCtrl');
});

Route::prefix('assets')->namespace('Assets')->group(function () {
 Route::resource('domain', 'DomainCtrl');
 Route::resource('server', 'ServerCtrl');
 Route::resource('proxy', 'ProxyCtrl');
 Route::resource('useragent', 'UseragentCtrl');
});
Route::prefix('reporting')->namespace('Reporting')->group(function () {
 Route::resource('reporting', 'ReportsCtrl')->middleware(['cors']);
 Route::resource('system1', 'System1Ctrl')->middleware(['cors']);
 Route::get('system1/summary/{type?}', 'System1Ctrl@summary')->middleware(['cors']);
});
Route::namespace ('Users')->group(function () {
 Route::resource('user', 'UserCtrl');
});
Route::get('track/{cid}/{sid?}/{action?}', 'Reporting\TrackCtrl@track')->middleware(['cors']);