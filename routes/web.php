<?php
use Illuminate\Support\Facades\DB;
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
    $datas = sellmodel::get();
    // $datas = sellmodel::get()->latest()->paginate(8);
    // dd($datas);
    return view('frontend.index',compact('datas'));
})->name('productview');

// Route::get('/','FrontendController@data')->name('productview');

//Search Result route
Route::get('/result','categoryControler@search')->name('Search.Result');

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
   
    Route::post('/update/{id}','productview@update')->name('product.update');//Product Update
  

    Route::view('/registerview','backend.admin.registerview')->name('registerview');// view register details
    Route::get('/register-view','registercontroller@display')->name('register-view');

    Route::view('/testimonial','backend.admin.testimonialview')->name('testimonialview');// view testimonial(feedback) details
    Route::get('/testimonial-view','testimonial@display')->name('testimonial-view');

     Route::view('/complaint','backend.admin.complaintview')->name('complaintview');// view complaint details
     Route::get('/complaint-view','complaintscontroller@display')->name('complaint-view');

     Route::view('/AddAdmin','backend.admin.AddAdmin')->name('AddAdmin');// view Add Admin//
     Route::post('/Admin-create','registercontroller@create')->name('Admin.Create');//Add Admin//

     //Edit Profile 
     Route::get('/Admin-Profile','ProfileController@displayAdmin')->name('Admin.Profile');//Profile Admin//
     Route::get('/edit/{id}','ProfileControlle@edit')->name('Admin.edit');//Product Edit

    Route::get('/logout','logincontroller@logout')->name('logout'); //logout

     //admin Setting
     //to update all sliders//
     Route::view('/slider-view','backend.admin.Setting.Slide.AddImage')->name('slider-view');// view addslider form //
    Route::post('/slider-create','SettingController@create')->name('slider-create');

    Route::view('/complaint','backend.admin.Setting.Slide.display')->name('DisplayImg');// view Slider image details
    Route::get('/DisplayImg','SettingController@display')->name('Display-Img');

    Route::get('/edit/{id}','SettingController@edit')->name('image.edit');//slide image Edit
    Route::post('/update/{id}','SettingController@update')->name('image.update');//Product Update
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

    // User Orders
    Route::get('/Order/Details','OrderCotroller@index')->name('order.details');    
   
   
  });

  Route::view('/userdashboard','frontend.index')->name('userdashboard');//to view user dashboard// 
  Route::view('/testimonial','frontend.testimonial')->name('testimonial');//testimonial//
  Route::post('/testimonial-create','testimonial@create')->name('testimonial.create')->middleware('auth.login');//testimonial submit//
  Route::view('/complaint','frontend.contact')->name('complaint');//complaints//
  Route::post('/complaint-create','complaintscontroller@create')->name('complaint.create')->middleware('auth.login');//complaints submit//
  Route::view('/productview','frontend.Productview')->name('productview');//route for productview//
  Route::get('/pro-view','productview@displaypro')->name('pro-view');
  
  Route::view('/contacts','frontend.contact')->name('frontend.contact');//route for contact //
  Route::view('/OrderForm','frontend.OrderForm')->name('OrderForm');//route for orderform//


Route::get('/Product/details/{id}','ViewMoreController@index')->name('ProductDetail');//route for view more//

// Mail to client
Route::post('Product/Order/{id}','OrderCotroller@order')->name('Product.Order');  //


 //search Product
 Route::get('/search','categoryControler@search')->name('frontend.search');
   