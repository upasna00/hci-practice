<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group(['middleware' => ['web']], function () {
    //for the public view 
Route::get('/', function () {return view('/users/index');});
//Route::get('/otcPage', function () {return view('/product/otcPage');});
Route::get('/diabetesCategory', function () {return view('product/diabetesCategory');});
Route::get('/personalCategory', function () {return  view('product/personalCategory');});
Route::get('/aboutUs', function () {return  view('users/aboutUs');});
Route::get('/gallery', function () {return  view('users/gallery');});
Route::get('/contactUs', function () {return  view('users/contactUs');});
Route::get('/register',function() {return view('users/registerLogin');});
Route::get('/uploadPres', function() {return view('users/uploadrescription');});
Route::get('/shoppingCarts', function() { return view('users/shoppingCart');});
Route::get('/thankyou', function() { return view('users/thankYouAfterPurchase');});
Route::get('/thankYouPrescription', function() { return view('users/thankYou-uploading');});
Route::get('/search', function() { return view('users/searchPage');});

// for the user account 
Route::post('/login', 'UserController@index');
Route::post('/register', 'UserController@addUser');
Route::get('/myOrders', 'UserController@myOrders');
Route::get('/myPrescriptions', 'UserController@prescriptions');
Route::get('/accountSettings', 'UserController@userSettings');
Route::get('/logout', 'UserController@logout');
Route::get('/checkout', 'UserController@checkout');
Route::get('/uploadPres', 'UserController@uploadPres');


//changing product details
Route::get('/editOtc', 'ProductController@editProduct');
Route::get('/otc', 'ProductController@index');
Route::get('/addOtc', 'ProductController@addProduct');

Route::get('/deleteOtc', 'ProductController@delete');
Route::get('/otcProducts','ProductController@userOtc');
// for the admin account 
Route::get('/adminn', 'AdminController@index');
Route::post('/admin', 'AdminController@index');
Route::get('/adminLogin', function() {return view('admin/login');});

Route::get('/profile','AdminController@profile');
Route::get('/userStatus','AdminController@decideUsersOrder');

});
