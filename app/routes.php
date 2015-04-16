<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/{slug}.html', function ($slug){
	$title     = 'Заголовок страницы';
	$longtitle = 'Заголовок страницы';
    return View::make('pages.'.$slug, compact('longtitle', 'title'));
})->where('slug', '(about|contact|services)');

Route::get('/blog', function() {
	return 'Здесь будут новости компании';
});