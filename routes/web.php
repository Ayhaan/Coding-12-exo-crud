<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'AllController@show')->name('contact');


//  Route USER

route::get('/user', 'UserController@show');


// Route CRUD

    // about
Route::get('/intro', 'IntroController@show');
Route::get('/intro/{id}/delete', 'IntroController@destroy');

    // service
Route::get('/service', 'ServiceController@show')->name('service');
Route::get('/service/{id}/delete', 'ServiceController@destroy');

Route::get('/service/{id}/edit', 'ServiceController@edit');
Route::post('/service/{id}/update', 'ServiceController@update');

Route::get('/service/create', 'ServiceController@create');
Route::post('/service/store', 'ServiceController@store');

    // portfolio
Route::get('/portfolio', 'PortfolioController@show')->name('portfolio');
Route::get('/portfolio/{id}/delete', 'PortfolioController@destroy');

Route::get('/portfolio/{id}/edit', 'PortfolioController@edit');
Route::post('/portfolio/{id}/update', 'PortfolioController@update');

Route::get('/portfolio/create', 'PortfolioController@create');
Route::post('/portfolio/store', 'PortfolioController@store');

    // testimonial
Route::get('/testimonial', 'TestimonialController@show');


    // Team
Route::get('/team', 'TeamController@show')->name('team');
Route::get('/team/{id}/delete', 'TeamController@destroy');

Route::get('/team/{id}/edit', 'TeamController@edit');
Route::post('/team/{id}/update', 'TeamController@update');

Route::get('/team/create', 'TeamController@create');
Route::post('/team/store', 'TeamController@store');


    // forum contact
Route::get('/contact', 'ContactController@show');
Route::get('/contact/{id}/delete', 'ContactController@destroy');

Route::post('/contact/store', "ContactController@store");




