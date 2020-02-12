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


Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/home','Template@home');
Route::get('/element','Theme@element');
Route::get('/', 'Theme@index');
Route::get('/generic','Theme@generic');
Route::get('/add','crud_app@add');
Route::post('/add','crud_app@insert');
Route::get('/fetch','crud_app@fetch');
Route::get('/delete/{id}','crud_app@delete');
Route::get('/edit/{id}','crud_app@edit');
Route::post('/edit/{id}','crud_app@editPost');


