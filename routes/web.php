<?php
Auth::routes();

Route::middleware(['auth'])->group(function () {
 Route::prefix('entourage')->namespace('Entourage')->group(function () {
  Route::resource('account', 'AccountCtrl');
  Route::resource('profile', 'ProfileCtrl');
  Route::resource('type', 'TypeCtrl');
 });
 Route::prefix('site')->namespace('Site')->group(function () {
  Route::resource('page', 'PageCtrl');
  Route::resource('post', 'PostCtrl');
  Route::put('post/metadata/{id}', 'PostCtrl@updateMetadata');
  Route::resource('route', 'RouteCtrl');
  Route::resource('domain', 'DomainCtrl');
 });
 Route::namespace ('Users')->group(function () {
  Route::resource('user', 'UserCtrl');
 });
 Route::view('/', 'web');
 Route::view('/{page?}', 'home');
 Route::view('/{page}/{subpage?}', 'home');
});