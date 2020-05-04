<?php
Route::get('system1/{args?}', 'System1Charts')->where('args', '(.*)');
Route::get('traffic/{args?}', 'TrafficCharts')->where('args', '(.*)');