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
//getPages
Route::post('getPages', 'MainController@getPages')->name('getPages');
Route::middleware('auth')->group(function () {
    Route::get('cabinet/{id}', 'MainController@cabinet')->name('cabinet');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

//create Order and Applications
Route::post('createApplications', 'Admin\ApplicationsController@createApplications')->name('createApplications');
Route::post('createOrders', 'Admin\OrdersController@createOrders')->name('createOrders');
Route::post('createCart', 'Admin\CartsController@createCart')->name('createCart');


//uploadPhotoStairs
//Admin Panel
Route::middleware('role:admin|junior_admin|manager')->group(function () {

    Route::get('admin/dashboard', 'Admin\AdminController@dashboard')->name('dashboard');

    //Route::get('admin/test', 'Admin\AdminController@test')->name('test');
    //User-admin routes
    Route::get('admin/createUser', 'Admin\AdminController@createUser')->name('createUser');
    Route::post('admin/createAccount', 'Admin\AdminController@createAccount')->name('createAccount');
    Route::get('admin/viewUsers', 'Admin\AdminController@viewUsers')->name('viewUsers');
    //
    Route::get('admin/searchUser', 'Admin\AdminController@searchUser')->name('searchUser');
    //
    Route::get('admin/EditUser/{id}', 'Admin\AdminController@editUser')->name('editUser');
    Route::post('admin/updateAccount', 'Admin\AdminController@updateAccount')->name('updateAccount');
    Route::get('admin/deleteUser/{id}', 'Admin\AdminController@deleteUser')->name('deleteUser');

    //Application-admin routes
    Route::get('admin/viewApplications', 'Admin\ApplicationsController@viewApplications')->name('viewApplications');
    Route::get('admin/editApplication/{id}', 'Admin\ApplicationsController@editApplication')->name('editApplication');
    Route::post('admin/updateApplication', 'Admin\ApplicationsController@updateApplication')->name('updateApplication');
    Route::get('admin/deleteApplication/{id}', 'Admin\ApplicationsController@deleteApplication')->name('deleteApplication');

    //Order-admin routes
    Route::get('admin/viewOrders', 'Admin\OrdersController@viewOrders')->name('viewOrders');
    Route::get('admin/editOrder/{id}', 'Admin\OrdersController@editOrder')->name('editOrder');
    Route::post('admin/updateOrder', 'Admin\OrdersController@updateOrder')->name('updateOrder');
    Route::get('admin/deleteOrder/{id}', 'Admin\OrdersController@deleteOrder')->name('deleteOrder');

    //Gallery
    Route::get('admin/viewPhoto', 'Admin\PhotoController@viewPhoto')->name('viewPhoto');
    Route::get('admin/deletePhoto/{id}', 'Admin\PhotoController@deletePhoto')->name('deletePhoto');
    Route::get('admin/createPhoto', 'Admin\PhotoController@createPhoto')->name('createPhoto');
    Route::post('admin/uploadPhoto', 'Admin\PhotoController@uploadPhoto')->name('uploadPhoto');

    //Videos
    //editVideo
    Route::get('admin/viewVideos', 'Admin\VideoController@viewVideos')->name('viewVideos');
    Route::get('admin/editVideo/{id}', 'Admin\VideoController@getEditVideos')->name('editVideo');
    Route::post('admin/updateVideo', 'Admin\VideoController@postEditVideos')->name('admin/updateVideo');

    //Socials-admin routres
    Route::get('admin/viewSocilas', 'Admin\SocialsController@viewSocials')->name('viewSocials');
    Route::get('admin/editSocilas/{id}', 'Admin\SocialsController@editSocials')->name('editSocials');
    Route::post('admin/updateSocials', 'Admin\SocialsController@updateSocials')->name('admin/updateSocials');

    //Text
    Route::get('admin/viewAdvantages', 'Admin\TextController@viewAdvantages')->name('viewAdvantages');
    Route::get('admin/editAdvantages/{id}', 'Admin\TextController@editAdvantages')->name('editAdvantages');

});

