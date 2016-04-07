<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
\Illuminate\Support\Facades\DB::listen(function($query) {
    var_dump($query->sql, $query->bindings);
});
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'Controller@index');

});

Route::get('update/day', 'Controller@getDay');
Route::get('update/hour', 'Controller@getHour');
Route::get('update/lastHour', 'Controller@getLastHour');
Route::get('update/lastMinute', 'Controller@getLastMinute');
