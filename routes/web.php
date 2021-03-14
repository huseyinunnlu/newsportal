<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', 'App\Http\Controllers\frontController@index');
Route::get('article/{id}','App\Http\Controllers\frontController@article');//Detay sayfası
Route::get('category/{slug}', 'App\Http\Controllers\frontController@category');
Route::get('page/{slug}', 'App\Http\Controllers\frontController@pages');
Route::get('contact-us', 'App\Http\Controllers\frontController@contactUs');
Route::post('sendmessage','App\Http\Controllers\crudController@insertData');

//admin
Route::get('adminpanel', 'App\Http\Controllers\adminController@index');

//category
Route::get('adminpanel/category', 'App\Http\Controllers\adminController@category');
Route::post('addcategory', 'App\Http\Controllers\crudController@insertData');
Route::get('editcategory/{id}', 'App\Http\Controllers\adminController@editCategory');
Route::post('updatecategory/{id}', 'App\Http\Controllers\crudController@updateData');
Route::post('multipleDelete', 'App\Http\Controllers\adminController@multipleDelete');

//Settings
Route::get('adminpanel/settings', 'App\Http\Controllers\adminController@settings');
Route::post('addsettings', 'App\Http\Controllers\crudController@insertData');
Route::post('updatesettings/{id}', 'App\Http\Controllers\crudController@updateData');

//POSTS
Route::get('adminpanel/add-post', 'App\Http\Controllers\adminController@addPost');
Route::get('adminpanel/all-posts', 'App\Http\Controllers\adminController@allPosts');
Route::get('adminpanel/edit-post/{id}', 'App\Http\Controllers\adminController@editPost');
Route::post('addpost', 'App\Http\Controllers\crudController@insertData');
Route::post('updatepost/{id}', 'App\Http\Controllers\crudController@updateData');
//SEARCH GELECEK

//PAGES
Route::get('adminpanel/add-page', 'App\Http\Controllers\adminController@addPage');
Route::post('addpage', 'App\Http\Controllers\crudController@insertData');
Route::get('adminpanel/all-pages', 'App\Http\Controllers\adminController@allPages');
Route::get('adminpanel/edit-page/{id}', 'App\Http\Controllers\adminController@editPage');
Route::post('updatepage/{id}', 'App\Http\Controllers\crudController@updateData');

//Messages
Route::get('adminpanel/all-messages', 'App\Http\Controllers\adminController@allMessages');

//Advertisements
Route::get('adminpanel/add-ads', 'App\Http\Controllers\adminController@addAds');
Route::post('addads', 'App\Http\Controllers\crudController@insertData');
Route::get('adminpanel/all-ads', 'App\Http\Controllers\adminController@allAds');
Route::get('adminpanel/edit-ads/{id}', 'App\Http\Controllers\adminController@editAds');
Route::post('updateads/{id}', 'App\Http\Controllers\crudController@updateData');

//Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', 'App\Http\Controllers\HomeController@logout');
