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

// Route::get('/', function () {
//     return view('welcome');
// });
 
Route::get('/','BandsController@list')->name('list');
Route::get('trang-tao-thuong-hieu','BandsController@add')->name('brand.add');
Route::post('tao-thuong-hieu','BandsController@save')->name('brand.save');
Route::get('trang-sua-thuong-hieu/{id}','BandsController@edit')->name('brand.edit');
Route::post('sua-thuong-hieu/{id}','BandsController@update')->name('brand.update');
Route::get('xoa-thuong-hieu/{id}','BandsController@delete')->name('brand.delete');


Route::get('trang-tao-may-bay','PlanesController@add')->name('plane.add');
Route::post('tao-may-bay','PlanesController@save')->name('plane.save');
Route::get('trang-sua-may-bay/{id}','PlanesController@edit')->name('plane.edit');
Route::post('sua-may-bay/{id}','PlanesController@update')->name('plane.update');
Route::get('xoa-may-bay/{id}','PlanesController@delete')->name('plane.delete');