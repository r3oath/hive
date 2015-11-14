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

Route::get('/', function () {
    return view('welcome');
});

// API endpoint example.
Route::group(['prefix' => 'api/v1'], function () {
    Route::resource(
        'entries',
        'Api\EntryController',
        ['except' => ['create', 'edit']]
    );

    // Try uploading the example file in public/entry.csv :)
    Route::post('entries/upload', 'Api\EntryController@upload');
});

// Web endpoint example.
Route::resource(
    'entries',
    'Web\EntryController'
);
