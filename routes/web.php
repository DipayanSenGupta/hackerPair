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

Route::get('/', 'WelcomeController@index');

 Route::view('about', 'about.index')->name('about.index');
 Route::view('about/book', 'about.book')->name('about.book');
 Route::view('about/faq', 'about.faq')->name('about.faq');
 Route::view('about/privacy', 'about.privacy')->name('about.privacy');
 Route::view('about/tos', 'about.tos')->name('about.tos');

 // Route::view('contact', 'contact.index')->name('contact.index');

 // Route::get('events', 'EventsController@index')->name('events.index');
 // Route::get('events/{id}', 'EventsController@show')->name('events.show');
Route::resource('contact','ContactController');

Route::resource('events','EventsController');
 Route::get('languages', 'LanguagesController@index')->name('languages.index');

 Route::get('locations', 'LocationsController@index')->name('locations.index');

 Route::get('map', 'MapsController@index')->name('maps.index');


Auth::routes();

Route::get('auth/github', 'SocialGithubController@redirectToProvider');
Route::get('auth/github/callback', 'SocialGithubController@handleProviderCallback');

Route::get('home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','namespace'=> 'Admin'
	,'middleware'=>'admin'],function(){
	Route::resource('user','UsersController');
	Route::resource('list','ListsController');
	Route::resource('product','ProductsController');
	Route::resource('category','CategoriesController');
});


