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
    Route::get('/edit-shifting-category/{shiftingCategory}', "ShiftingController@edit_shifting_category")->name('edit_shifting_category');
    Route::get('/add-shifting-category', "ShiftingController@add_shifting_category")->name('add_shifting_category');
    Route::post('/create_shifting_category', "ShiftingController@create_shifting_category")->name('create_shifting_category');
    Route::post('/update_shifting_category', "ShiftingController@update_shifting_category")->name('update_shifting_category');

    Route::get('/role', "RoleController@role")->name('role');
    Route::get('/edit-role/{role}', "RoleController@edit_role")->name('edit_role');
    Route::get('/add-role', "RoleController@add_role")->name('add_role');
    Route::post('/create_new_role', "RoleController@create_new_role")->name('create_new_role');
    Route::post('/update_role', "RoleController@update_role")->name('update_role');

    Route::get('/add-staff', "StaffController@add_staff")->name('add_staff');
    Route::get('/staff', "StaffController@staff")->name('staff');
    Route::get('/view-staff/{user}', "StaffController@view_staff")->name('view_staff');
    Route::post('/create_new_staff', "StaffController@create_new_staff")->name('create_new_staff');

    Route::get('/shifting', "ShiftingController@shifting")->name('shifting');

    // logout
    Route::get('/logout', "AdminController@logout")->name('logout');
});