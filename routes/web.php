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

Route::get('/', function () {
	// $languages = [
	// 	'languages' => [
	// 		'Perl',
	// 		'PHP',
	// 		'Python'
	// 	]
	// ];
	// \Log::debug($languages);
	// dd($languages);
    return view('welcome');
});
Route::get(
'events/category/{category}/{subcategory?}',
'EventsController@category'
);

Route::get('events/{id}','EventsController@show')->name('events.show'); 

