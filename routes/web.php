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
    return view('index');
})->name('index');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/list_groups', 'Groups@list_groups')->name('list_groups');

Route::get('/whatsapp', 'Groups@whatsapp')->name('whatsapp');
Route::get('/facebook', 'Groups@facebook')->name('facebook');
Route::get('/skype',    'Groups@skype')->name('skype');
Route::get('/viber',    'Groups@viber')->name('viber');

Route::get('/ajouer-un-groupe', 'Groups@ajouterGroupe')->name('ajouterGroupe');

Route::post('/add_group', 'Groups@add_group')->name('add_group');

Route::get('/search/', 'Groups@search')->name('search');

Route::post('/mail/', 'Groups@email')->name('email');