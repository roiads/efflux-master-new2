<?php
Auth::routes();
Route::middleware(['auth'])->group(function () {
 Route::view('/{page?}/{subpage?}', 'home');
});
Route::view('/', 'web');