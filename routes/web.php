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

Route::get('/', 'MyCustomAuthController@authChecker');

Auth::routes([
   'register' => false,
   'verify'   => false,
   'reset'    => false,
]);

//role == 1
//route for admin
Route::group(['middleware' => ['is_admin']], function () {

   Route::get('admin/home', 'HomeController@adminHome')->name('admin.home');
   
});

//role == null
//route for requestor
Route::group(['middleware' => ['is_user']], function () {

   Route::get('user/home', 'HomeController@userHome')->name('user.home');


});




