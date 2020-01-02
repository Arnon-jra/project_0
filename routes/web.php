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

Route::get('/', 'HelloController@index');
    /* $variable = 'hello from routes';
    $coolString = 'hello world 123';
    return view('index', compact('coolString')); */
        // 'someData' => $variable,
    // ]);

Route::get('/about', 'HelloController@about');
// Route::view('/about', 'about');

Route::get('/projects', 'HelloController@projects');

Route::get('/phdWork', 'HelloController@phdWork');

Route::get('/classes', 'HelloController@classes');

Route::get('/services', 'HelloController@services');

Route::get('/contact', 'HelloController@contact');

Route::get('/iot_platform', 'HelloController@iot_platform');

