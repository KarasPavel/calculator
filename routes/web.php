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


Auth::routes();
Route::get('/', 'MainController@main')->name('main');
Route::middleware('auth')->group(function(){
    Route::get('cabinet/{id}', 'MainController@cabinet')->name('cabinet');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout' );
});


//Route::get('/home', 'HomeController@index')->name('home');


//Admin Panel
Route::middleware('role:admin|junior_admin|manager')->group(function () {

    Route::get('admin/dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::get('admin/test', 'Admin\AdminController@test')->name('test');
    Route::get('admin/createUser', 'Admin\AdminController@createUser')->name('createUser');
    Route::post('admin/createAccount', 'Admin\AdminController@createAccount')->name('createAccount');
    Route::get('admin/viewUsers','Admin\AdminController@viewUsers')->name('viewUsers');

});

