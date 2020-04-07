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

Route::get('/', 'AllController@show');


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




Route::get('/portfolio', 'PortfolioController@show');

Route::get('/testimonial', 'TestimonialController@show');

Route::get('/team', 'TeamController@show');



