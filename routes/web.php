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
    return view('index',array('page_title'=>''));
});

Route::get('/contact', function () {
    return view('contact',array('page_title'=>'Contact Us'));
});

Route::get('/about', function () {
    return view('about',array('page_title'=>'About Developers'));
});

// admin route
Route::group(['namespace'=>'admin','prefix'=>'admin'], function (){
    Route::resource('/', "LoginController");
    Route::get('/dashboard', "AdminController@dashboard")->name('dashboard');
    Route::get('/shifting-category', "ShiftingController@shifting_category")->name('shifting_category');
    // logout
    Route::get('/logout', "AdminController@logout")->name('logout');
});