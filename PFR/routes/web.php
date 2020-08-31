<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
// Route::get('/Deals','HomeController@index')->name('index')->middleware('auth');

Route::get('/register', function () {
    return view('register');
});
Route::resource('/Facture','FactureController')->middleware('auth');
Auth::routes();
Route::get('/home','HomeController@index')->name('home');
Route::get('/Profils','ProfilsController@index')->name('Profils');
Route::resource('/ProfilsEdit','PrfilseditController')->middleware('auth');
