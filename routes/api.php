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
    Route::resource('traffic', 'TrafficCtrl');
    Route::resource('system1', 'System1Ctrl');
    Route::get('system1/table/{type?}', 'System1Ctrl@table');
});
Route::prefix('users')->namespace('Users')->group(function () {
    Route::resource('user', 'UserCtrl');
    Route::resource('roles', 'RoleCtrl');
});
Route::namespace ('Tracker')->group(function () {
    Route::get('track/{cid}/{sid?}/{action?}/{args?}', 'TrafficCtrl')->where('args', '(.*)');
});
Route::get('system1/{args?}', 'ApiController')->where('args', '(.*)');