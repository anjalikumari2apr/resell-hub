<?php
use App\category;
use App\sellmodel;
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
// //to view welcome page//

Route::get('/', function () {
    // $data['products'] = sellmodel::get();
    // dd($data);
    return view('frontend.index');
})->name('productview');

// Route::get('/','FrontendController@data')->name('productview');

//Login & Register routes
Route::view('/Login','frontend.LoginRegister.Login')->name('login.page'); //view login//
Route::post('/Submit','logincontroller@login')->name('login.submit'); //submit login/
Route::view('/Register','frontend.LoginRegister.Register')->name('Register.View'); //for register//
Route::post('/Reg/Submit','registercontroller@register')->name('Register.Submit'); //register submit//


// admin routes//
  Route::group(['prefix'=>'admin','middleware' => 'auth.login'],function(){
    Route::view('/dashboard','backend.admin.index')->name('admin.dashboard');//admin home page
    Route::view('/userinterface','backend.admin.frontend')->name('userinterface');//admin pannel
    Route::view('/productview','backend.admin.product')->name('productview');// view product table
    Route::get('/product-view','productview@display')->name('product-view');

    Route::get('/delete/{id}','productview@delete')->name('product.delete');//delete products

    Route::view('/registerview','backend.admin.registerview')->name('registerview');// view register details
    Route::get('/register-view','registercontroller@display')->name('register-view');

    Route::view('/testimonial','backend.admin.testimonialview')->name('testimonialview');// view testimonial(feedback) details
    Route::get('/testimonial-view','testimonial@display')->name('testimonial-view');

     Route::view('/complaint','backend.admin.complaintview')->name('complaintview');// view complaint details
     Route::get('/complaint-view','complaintscontroller@display')->name('complaint-view');

     Route::view('/AddAdmin','backend.admin.AddAdmin')->name('AddAdmin');// view Add Admin//
     Route::post('/Admin-create','registercontroller@create')->name('Admin.Create');//Add Admin//

     Route::get('/Admin-Profile','ProfileController@displayAdmin')->name('Admin.Profile');//Profile Admin//

    Route::get('/logout','logincontroller@logout')->name('logout'); //logout
  });


//category section//
   Route::get('/categoryfetch','sellcontroller@displayData')->name('categoryfetch');//to fetch from category//
   Route::view('/categoryform','backend.category.category')->name('categoryform');//Category data Insert
   Route::post('/category-form','categoryControler@categorycreate')->name('form.category');
   Route::get('/dispalycate','categoryControler@display')->name('dispalycate');//Display Category
   Route::get('/delete/{id}','categoryControler@delete')->name('cate.delete');//Delete Category
   Route::get('/edit/{id}','categoryControler@edit')->name('cate.edit');//Category Edit
   Route::post('/update/{id}','categoryControler@update')->name('cate.update');//Category Update
 





// user routes//
  Route::group(['prefix'=>'User','middleware' => 'auth.login'],function(){
    Route::view('/dashboard','backend.User.index')->name('User.dashboard');//admin home page

     // For  sell user Product//
    Route::get('/sellform','categoryControler@dispcate')->name('frontendsell');//to view sellform//
    Route::post('sell-create','sellcontroller@sellcreate')->name('backend.User.Products.Sell');//sellcreate//
    Route::get('/manage-product','sellcontroller@displayproduct')->name('manage-product');
   
   
  });

  Route::view('/userdashboard','frontend.index')->name('userdashboard');//to view user dashboard// 
  Route::view('/testimonial','frontend.testimonial')->name('testimonial');//testimonial//
  Route::post('/testimonial-create','testimonial@create')->name('testimonial.create');//testimonial submit//
  Route::view('/complaint','frontend.contact')->name('complaint');//complaints//
  Route::post('/complaint-create','complaintscontroller@create')->name('complaint.create');//complaints submit//
  Route::view('/productview','frontend.Productview')->name('productview');//route for productview//
  Route::get('/pro-view','productview@displaypro')->name('pro-view');
  
  Route::view('/contacts','frontend.contact')->name('frontend.contact');//route for contact //
  Route::view('/OrderForm','frontend.OrderForm')->name('OrderForm');//route for orderform//



//route for categoryview form//
Route::get('/phone-laptop','Catviewcontroller@phones')->name('phones&laptop');//route for phone and laptopform//
Route::get('/home-appliences','Catviewcontroller@homeappliences')->name('homeappliences');//route for homeappliences//
Route::view('/propertysell','frontend.categoryforms.propertysell')->name('propertysell');//route for Ptoperty for sell//
Route::view('/appartmentrent','frontend.categoryforms.appartmentrent')->name('appartmentrent');//route for Ptoperty for rent//
Route::view('/dresses','frontend.categoryforms.dresses')->name('dresses');//route for  dresses material//
Route::view('/furniture','frontend.categoryforms.furniture')->name('furniture');//route for furniture//
Route::view('/vehicles','frontend.categoryforms.vehicles')->name('vehicles');//route for vehicles//
Route::view('/animals','frontend.categoryforms.animals')->name('animals');//route for animals//
Route::view('/services','frontend.categoryforms.services')->name('services');//route for animals//



Route::view('/details','frontend.ProductDetail')->name('ProductDetail');//route for //