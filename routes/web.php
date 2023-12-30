<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded
 by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//to view welcome page//
Route::get('/', function () {
    return view('frontend.index');
});
  
//for login//
Route::view('/login','frontend.login')->name('loginview');
Route::post('/submit','logincontroller@login')->name('user.login');

// admin routes//
Route::group(['prefix'=>'admin'],function(){
    Route::view('/dashboard','backend.admin.layouts.master')->name('admindashboard');
});

// buyer routes//
Route::group(['prefix'=>'buyer'],function(){
    Route::view('/dashboard','backend.buyer.layouts.master')->name('buyerdashboard');
});


// buyer routes//
Route::group(['prefix'=>'seller'],function(){
    Route::view('/dashboard','backend.seller.layouts.master')->name('sellerdashboard');
});


//to view user dashboard//
Route::view('/userdashboard','frontend.index')->name('userdashboard');

//to view user login//


//to view sellform//
Route::view('/sellform','frontend.sell')->name('frontend.sell');
//to insert data //
Route::post('/createsell','sellcontroller@sellcreate')->name('frontend.sell');
//to view category form//
Route::view('/categoryform','categoryController@display')->name('backend.category');

Route::post('/caregoryform','categoryController@categorycreate')->name('backend.category');

//to fetch from category//
Route::get('/categoryfetch','sellcontroller@displayData')->name('categoryfetch');



