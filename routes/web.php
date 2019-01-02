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
Route::get('/', 'GuestControl@index');
Route::get('user/login', 'Guestcontrol@login');
Route::get('user/aboutus','GuestControl@aboutus');
Route::get('user/contact','GuestControl@contact');
Route::get('user/privacy','GuestControl@privacy');
Route::get('user/terms','GuestControl@terms');
Route::get('user/useracc','GuestControl@useracc');
Route::get('user/myprofile','UserControl@myprofile');
Route::get('user/online','UserControl@online');
Route::get('user/upload','UserControl@upload');
Route::post('/upload/store','UserControl@store');
Route::get('/user/myprofile', 'UserControl@myprofile');


// Route::get('but', 'GuestControl@page');
// Route::post('but/mail', 'GuestControl@mail');


Route::get('admin/', 'AdminControl@index');
Route::post('/admin/adduser/add', 'AdminControl@add');
Route::get('admin/adduser', 'AdminControl@adduser');
Route::get('admin/vieworder', 'AdminControl@orders');
Route::get('admin/vieworder/{order_id}', 'AdminControl@show');
Route::get('admin/mgtinven', 'AdminControl@mgtinven');
Route::post('admin/mgtinven/addmedi', 'AdminControl@addmedi');
Route::post('admin/mgtinven/searchmedi', 'AdminControl@searchmedi');
Route::get('admin/deleteuser', 'AdminControl@deleteuser');
Route::post('admin/deleteuser/delete', 'AdminControl@delete');
Route::get('admin/expdate', 'AdminControl@expdate');




Route::get('phar/', 'PharControl@index');
Route::get('phar/mgtinven', 'PharControl@select');
Route::post('phar/mgtinven/addmedi', 'PharControl@addmedi');
Route::post('phar/mgtinven/update', 'PharControl@update');
Route::get('phar/vieworder', 'PharControl@orders');
Route::get('phar/browse', 'PharControl@browse');
Route::post('phar/browse/browsemedi', 'PharControl@browsemedi');
Route::get('phar/vieworder/{order_id}', 'PharControl@show');
// Route::post('phar/vieworder/{order_id}/seachinven', 'PharControl@searchinven');
Route::post('/{order_id}/confirm', 'PharControl@configmail');
Route::post('/{order_id}/reject', 'PharControl@rijectmail');
Route::post('/{order_id}/custom', 'PharControl@custom');
Route::post('/{order_id}/custom/mail' , 'PharControl@custom_mail');
Route::post('phar/sale', 'PharControl@sale');
Route::post('phar/mgtinven/delete', 'PharControl@delete');
Route::get('phar/exp', 'PharControl@exp');
Route::POST('/phar/getData/{order_id}','PharControl@searchinven');
Route::get('phar/bills' , 'PharControl@bills');



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
