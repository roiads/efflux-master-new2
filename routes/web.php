<?php
/*Auth::routes();
Route::middleware(['auth'])->group(function () {
 Route::view('/{args?}', 'home')->where('args', '(.*)');
});
Route::view('/', 'web');*/

Route::get('/{any}', function() {
	return view('index');
})->where('any', '.*');