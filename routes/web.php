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



//Delete Category


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
//to fetch from category//
Route::get('/categoryfetch','sellcontroller@displayData')->name('categoryfetch');


//Category data Insert
Route::view('/categoryform','backend.category.category')->name('categoryform');
Route::post('/category-form','categoryControler@categorycreate')->name('form.category');
//Display Category
Route::get('/dispalycate','categoryControler@display')->name('dispalycate');
//Delete Category
Route::get('/delete/{id}','categoryControler@delete')->name('cate.delete');
//Category Edit
Route::get('/edit/{id}','categoryControler@edit')->name('cate.edit');
//Category Update
Route::post('/update/{id}','categoryControler@update')->name('cate.update');






