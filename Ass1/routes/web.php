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
 
Route::get('/','BandsController@home')->name('home');
Route::get('login','LoginController@index')->name('login.index');
Route::post('login-confirm','LoginController@confirm')->name('login.confirm');
Route::get('logout','LoginController@logout')->name('logout');


Route::get('trang-tao-thuong-hieu','BandsController@add')->name('brand.add')->middleware('CheckLogin');
Route::get('danh-sach-thuong-hieu','BandsController@list')->name('brand.list');
Route::post('tao-thuong-hieu','BandsController@save')->name('brand.save')->middleware('CheckLogin');;
Route::get('trang-sua-thuong-hieu/{id}','BandsController@edit')->name('brand.edit')->middleware('CheckLogin');;
Route::post('sua-thuong-hieu/{id}','BandsController@update')->name('brand.update')->middleware('CheckLogin');;
Route::get('xoa-thuong-hieu/{id}','BandsController@delete')->name('brand.delete')->middleware('CheckLogin');;


Route::get('trang-tao-may-bay','PlanesController@add')->name('plane.add')->middleware('CheckLogin');;
Route::post('tao-may-bay','PlanesController@save')->name('plane.save')->middleware('CheckLogin');;
Route::get('danh-sach-may-bay','PlanesController@list')->name('plane.list');
Route::get('trang-sua-may-bay/{id}','PlanesController@edit')->name('plane.edit')->middleware('CheckLogin');;
Route::post('sua-may-bay/{id}','PlanesController@update')->name('plane.update')->middleware('CheckLogin');;
Route::get('xoa-may-bay/{id}','PlanesController@delete')->name('plane.delete')->middleware('CheckLogin');;