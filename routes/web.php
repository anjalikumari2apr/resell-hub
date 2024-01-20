<?php
use App\category;
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
   
    $data['categories'] = category::with('products')->get();
    return view('frontend.index', $data);
})->name('productview');





// Route::get('/', function () {
//    })->name('userdashboard');


// Route::get('/', function () {
//     return view('frontend.index');
// });



// admin routes//
Route::group(['prefix'=>'admin'],function(){
    Route::view('/welcome','backend.welcome');//view welcome
    Route::view('/login','backend.admin.login')->name('adminlogin');//view login//
    Route::post('/submit','logincontroller@login')->name('admin.login.submit');//submit login//
    Route::view('/dashboard','backend.admin.frontend')->name('adminhome');//admin home page
    Route::view('/userinterface','backend.admin.frontend')->name('userinterface');//admin pannel
    Route::view('/productview','backend.admin.product')->name('productview');// view product table
    Route::get('/product-view','productview@display')->name('product-view');

//Delete Product
    Route::get('/delete/{id}','productview@delete')->name('product.delete');//delete products

    //Register view//
    Route::view('/registerview','backend.admin.registerview')->name('registerview');// view register details
    Route::get('/register-view','registercontroller@display')->name('register-view');

     //testimonial view//
    Route::view('/testimonial','backend.admin.testimonialview')->name('testimonialview');// view testimonial(feedback) details
    Route::get('/testimonial-view','testimonial@display')->name('testimonial-view');

     //complaints view//
     Route::view('/complaint','backend.admin.complaintview')->name('complaintview');// view complaint details
     Route::get('/complaint-view','complaintscontroller@display')->name('complaint-view');

     //logout
Route::get('/logout','logincontroller@logout')->name('logout');


});





//category section//

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





//sell button and form//

//to view sellform//
Route::get('/sellform','categoryControler@dispcate')->name('frontendsell');
Route::post('/sell-create','sellcontroller@sellcreate')->name('frontend.sell');//sellcreate//


//to view user dashboard//
Route::view('/userdashboard','frontend.index')->name('userdashboard');






// user routes//
Route::group(['prefix'=>'user'],function(){

//for login//
Route::view('/login','frontend.userlogin')->name('loginview');
Route::post('/submit','registercontroller@login')->name('user.login.submit');//login submit//

//for register//
Route::view('/register','frontend.userregister')->name('userregister');
 Route::post('/userregister','registercontroller@register')->name('user.register');//register submit//
 
 

});


//to view testimonial//
Route::view('/testimonial','frontend.testimonial')->name('testimonial');//testimonial//
Route::post('/testimonial-create','testimonial@create')->name('testimonial.create');//testimonial submit//


//to view complaint//
Route::view('/complaint','frontend.contact')->name('complaint');//complaints//
Route::post('/complaint-create','complaintscontroller@create')->name('complaint.create');//complaints submit//



//route for productview//
 Route::view('/productview','frontend.Productview')->name('productview');


//route for contact //
Route::view('/contacts','frontend.contact')->name('frontend.contact');



//route for orderform//
Route::view('/OrderForm','frontend.OrderForm')->name('OrderForm');


//route for categoryview form//

//route for phone and laptopform//
Route::view('/phone&laptop','frontend.categoryforms.phones&laptop')->name('phones&laptop');

//route for homeappliences//
Route::view('/homeappliences','frontend.categoryforms.homeappliences')->name('homeappliences');

//route for Ptoperty for sell//
Route::view('/propertysell','frontend.categoryforms.propertysell')->name('propertysell');

//route for Ptoperty for rent//
Route::view('/appartmentrent','frontend.categoryforms.appartmentrent')->name('appartmentrent');


//route for  dresses material//
Route::view('/dresses','frontend.categoryforms.dresses')->name('dresses');


//route for furniture//
Route::view('/furniture','frontend.categoryforms.furniture')->name('furniture');


//route for vehicles//
Route::view('/vehicles','frontend.categoryforms.vehicles')->name('vehicles');

//route for animals//
Route::view('/animals','frontend.categoryforms.animals')->name('animals');

//route for animals//
Route::view('/services','frontend.categoryforms.services')->name('services');

