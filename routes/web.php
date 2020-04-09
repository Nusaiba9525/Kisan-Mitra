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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('registration','registration');


Route::view('index','KisanIndex');

#Admin
Route::view('viewadminlogin','Admin.adminlogin');
Route::view('adminhome','Admin.adminhome');
Route::post('log','Logincontroller@log');
#login
Route::post('adminlogin','Logincontroller@Login');
Route::get('home','Logincontroller@sessionget');
#change password
Route::get('changepass','Admincontroller@changepass');
Route::post('passupd','Admincontroller@passupd');
#logout
Route::post('logout','Logincontroller@Logout');
#verify account
Route::get('viewuser','Admincontroller@verifyaccount');
#verify rent items
Route::get('viewitems','Admincontroller@verifyitems');
#delete
Route::view('manage','Admin.manage');
Route::get('del/{id}','Mycontroller@delete');
#update
Route::get('update/{id}','Mycontroller@updform');
Route::post('updform/{id}','Mycontroller@update');

#Users
Route::view('viewusers','Farmer.homefarmer');
Route::view('farmerregistration','Farmer.farmerregistration');
Route::post('reg','Farmercontroller@registration');
#login
Route::view('farmerlogin','Farmer.farmerlogin');
Route::post('farmer','Logincontroller@UserLogin');
Route::get('farmerhome','Logincontroller@session');
#change password
Route::get('changepss','Admincontroller@changepass');
Route::post('passupdt','Admincontroller@passupd');

Route::view('product','Farmer.product');
Route::post('insert','Farmercontroller@product');

