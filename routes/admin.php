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
define('PAGINATION_COUNT',1000);

Route::group(['namespace'=>'App\Http\Controllers\Admin', 'middleware'=>'auth:admin'],function (){

    Route::get('/','DashboardController@index')->name('admin.dashboard');
    Route::get('logout','DashboardController@logout')->name('admin.logout');

    Route::get('create','DashboardController@create')->name('admin.create');
    Route::post('store','DashboardController@store')->name('admin.store');

    Route::get('print/{id}','DashboardController@print')->name('admin.print');

    // Route::get('search','DashboardController@logout')->name('admin.search');
    // Route::post('search','DashboardController@logout')->name('admin.search');

    
    ##################### Customer ############################
    Route::group(['prefix'=>'customer'],function (){
        Route::get('/','CustomerController@index')->name('admin.customer');
        Route::get('create','CustomerController@create')->name('admin.customer.create');
        Route::post('store','CustomerController@store')->name('admin.customer.store');

        Route::get('edit/{id}','CustomerController@edit')->name('admin.customer.edit');
        Route::post('update/{id}','CustomerController@update')->name('admin.customer.update');

        Route::get('delete/{id}','CustomerController@destroy') -> name('admin.customer.delete');
    });
    ##################### End Customer ########################

    ##################### Admin ##############################
    Route::group(['prefix'=>'admin'],function (){
        Route::get('/','AdminController@index')->name('admin.admin');
        Route::get('create','AdminController@create')->name('admin.admin.create');
        Route::post('store','AdminController@store')->name('admin.admin.store');

        Route::get('edit/{id}','AdminController@edit')->name('admin.admin.edit');
        Route::post('update/{id}','AdminController@update')->name('admin.admin.update');

        Route::get('delete/{id}','AdminController@destroy') -> name('admin.admin.delete');
    });
    ##################### End Admin ##########################


});


Route::group(['namespace'=>'App\Http\Controllers\Admin', 'middleware'=>'guest:admin'],function (){

    Route::get('login', 'LoginController@getLogin')->name('admin.getlogin');
    Route::post('login', 'LoginController@login')->name('admin.login');
});

//Auth::routes();

