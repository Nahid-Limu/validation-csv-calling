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

Auth::routes();


// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/home', 'HomeController@index')->name('home');
//     Route::post('/home', 'HomeController@UplodeCsv')->name('UplodeCsv');
// });
Route::get('/', 'HomeController@index')->name('home');
//Order uplode
Route::get('/order', 'OrderController@index')->name('order');
Route::post('/order', 'OrderController@UplodeCsv')->name('UplodeCsv');
//Order uplode

//Delivery uplode
// Route::get('/delivery', 'DeliveryController@index')->name('delivery');
// Route::post('/delivery', 'DeliveryController@UplodeCsv')->name('delivery.UplodeCsv');
//Delivery uplode

//Delivery uplode Row
    Route::get('/delivery', 'DeliveryControllerRow@index')->name('delivery');
    Route::post('/delivery', 'DeliveryControllerRow@UplodeCsv')->name('delivery.UplodeCsv');
//Delivery uplode Row

//StoreInformationRegistration
    Route::get('/StoreInformationRegistration','masterset\StoreInfoRegController@showStoreInformation')->name('showStoreInformation');
    Route::post('/StoreInformationRegistration','masterset\StoreInfoRegController@postStoreInformation')->name('postStoreInformation');
//StoreInformationRegistration

// export csv
Route::get('/data','ExportController@data')->name('data');
Route::get('/exportCsvExcel/{type}','ExportController@exportCsvExcel')->name('exportCsvExcel');
// export csv