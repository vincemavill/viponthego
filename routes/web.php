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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'home_controller@index');

Route::get('/testing/home', 'home_controller@home');


Route::get('/testing/corporate_services', 'services_controller@index');
	Route::get('/business', 'services_controller@business');
	Route::get('/webgraphic', 'services_controller@webgraphic');
	Route::get('/officefinder', 'services_controller@officefinder');


Route::get('/testing/packages', 'packages_controller@index');


Route::post('/testing/send_inquiry', 'contact_controller@inquiry_send');


// Route::get('/testing/send', 'contact_controller@send');

