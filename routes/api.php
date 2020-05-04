<?php
Route::get('{name}/{args?}', 'ApiController@runApi')->where('args', '(.*)');