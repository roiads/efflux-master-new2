<?php
Auth::routes();

Route::get('track/{cid}/{sid?}/{action?}/{args?}', 'Tracker\TrafficCtrl@track')->where('args', '(.*)');

Route::middleware(['auth'])->group(function () {
 Route::prefix('api')->group(function () {
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
  });
  Route::namespace ('Users')->group(function () {
   Route::resource('user', 'UserCtrl');
  });
 });
 Route::prefix('chartdata')->group(function () {
  /**
   * System1 ChartData Calls
   * dataset = total | mobile | desktop | clicks | renevue
   * column = null | domain | subid
   * args = key=value/key>value/...
   */
  Route::get('system1/{dataset}/{grouping?}/{args?}', '\App\Charts\System1Charts@getData')->where('args', '(.*)');
  Route::get('traffic/{dataset}/{grouping?}/{args?}', '\App\Charts\TrafficCharts@getData')->where('args', '(.*)');
 });
 Route::view('/{page?}/{subpage?}', 'home');
});
Route::view('/', 'web');