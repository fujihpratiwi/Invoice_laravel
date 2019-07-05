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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'customer'], function(){
        Route::get('/', 'CustomerController@index');
        Route::get('/new', 'CustomerController@create');
        Route::post('/', 'CustomerController@save');
        Route::get('/{id}', 'CustomerController@edit');
        Route::put('/{id}', 'CustomerController@update');
        Route::delete('/{id}', 'CustomerController@destroy');
    });

    Route::group(['prefix' => 'product'], function(){
        Route::get('/', 'ProductController@index');
        Route::get('/new', 'ProductController@create');
        Route::post('/', 'ProductController@save');
        Route::get('/{id}', 'ProductController@edit');
        Route::put('/{id}', 'ProductController@update');
        Route::delete('/{id}', 'ProductController@destroy');
    });

    Route::group(['prefix' => 'kota'], function(){
        Route::get('/', 'KotaController@index');
        Route::get('/new', 'KotaController@create');
        Route::post('/', 'KotaController@save');
        Route::get('/{id}', 'KotaController@edit');
        Route::put('/{id}', 'KotaController@update');
        Route::delete('/{id}', 'KotaController@destroy');
    });
    
    Route::group(['prefix' => 'invoice'], function(){
        Route::get('/', 'InvoiceController@index')->name('invoice.index');
        Route::get('/new', 'InvoiceController@create')->name('invoice.create');
        Route::post('/', 'InvoiceController@save')->name('invoice.save');
        Route::get('/{id}', 'InvoiceController@edit')->name('invoice.edit');
        Route::put('/{id}', 'InvoiceController@update')->name('invoice.update');
        Route::delete('/{id}', 'InvoiceController@deleteProduct')->name('invoice.delete_product');
        Route::delete('/{id}/delete', 'InvoiceController@destroy')->name('invoice.destroy');
        Route::get('/{id}/print', 'InvoiceController@generateInvoice')->name('invoice.print');
    });