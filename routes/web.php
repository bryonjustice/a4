<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
* Main homepage visitors see when they visit just /
*/
Route::get('/', 'DefectController@index');
Route::get('/defects/new', 'DefectController@enterNewDefect');
Route::post('/defects/create', 'DefectController@createNewDefect');
Route::get('/defects/delete/{id}', 'DefectController@confirmDeleteDefect');
Route::post('/defects/delete', 'DefectController@hideDefect');

/**
* Log viewer
* (only accessible locally)
*/
if(config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}


if(App::environment('local')) {

    Route::get('/drop', function() {

        DB::statement('DROP database a4');
        DB::statement('CREATE database a4');

        return 'Dropped a4; created a4.';
    });

};
