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
Route::middleware('auth')->group(function () {
    Route::get('cabinet/{id}', 'MainController@cabinet')->name('cabinet');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

Route::post('createApplications', 'Admin\ApplicationsController@createApplications')->name('createApplications');
//Route::get('/home', 'HomeController@index')->name('home');


//Admin Panel
Route::middleware('role:admin|junior_admin|manager')->group(function () {

    Route::get('admin/dashboard', 'Admin\AdminController@dashboard')->name('dashboard');

    //Route::get('admin/test', 'Admin\AdminController@test')->name('test');
    //User-admin routes
    Route::get('admin/createUser', 'Admin\AdminController@createUser')->name('createUser');
    Route::post('admin/createAccount', 'Admin\AdminController@createAccount')->name('createAccount');
    Route::get('admin/viewUsers', 'Admin\AdminController@viewUsers')->name('viewUsers');
    Route::get('admin/EditUser/{id}', 'Admin\AdminController@editUser')->name('editUser');
    Route::post('admin/updateAccount', 'Admin\AdminController@updateAccount')->name('updateAccount');
    Route::get('admin/deleteUser/{id}', 'Admin\AdminController@deleteUser')->name('deleteUser');

    //Application-admin routes
    Route::get('admin/viewApplications', 'Admin\ApplicationsController@viewApplications')->name('viewApplications');
    Route::get('admin/editApplication/{id}', 'Admin\ApplicationsController@editApplication')->name('editApplication');
    Route::post('admin/updateApplication','Admin\ApplicationsController@updateApplication')->name('updateApplication');
    Route::get('admin/deleteApplication/{id}','Admin\ApplicationsController@deleteApplication')->name('deleteApplication');
});

