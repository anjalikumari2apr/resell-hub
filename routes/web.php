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
    // Route::view('/login','backend.admin.login');
    Route::view('/dashboard','backend.admin.frontend')->name('admindashboard');
    Route::view('/userinterface','backend.admin.frontend')->name('userinterface');
});

// buyer routes//
Route::group(['prefix'=>'buyer'],function(){
    Route::view('/dashboard','backend.buyer.index')->name('buyerdashboard');
});


// buyer routes//
Route::group(['prefix'=>'seller'],function(){
    Route::view('/dashboard','backend.seller.index')->name('sellerdashboard');
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
Route::get('/dispalycate','categoryControler@display')->name('dispalycate');\


//Delete Category
Route::get('/delete/{id}','categoryControler@delete')->name('cate.delete');
//Category Edit
Route::get('/edit/{id}','categoryControler@edit')->name('cate.edit');
//Category Update
Route::post('/update/{id}','categoryControler@update')->name('cate.update');




//route for productview//
Route::view('/productview','frontend.Productview')->name('productview');


//route for contact //
Route::view('/contacts','frontend.contact')->name('frontend.contact');

//route for phone and laptopform//
Route::view('/phone&laptop','frontend.categoryforms.phones&laptop')->name('phones&laptop');

//route for homeappliences//
Route::view('/ homeappliences','frontend.categoryforms.homeappliences')->name('homeappliences');



//route for homeappliences//
Route::view('/OrderForm','frontend.OrderForm')->name('OrderForm');
