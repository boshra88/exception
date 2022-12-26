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



Route::get('/' ,'HomeController@index')->name('login');
Auth::routes();




Route::get('/products/{id}' ,'ProductController@show')->name('products.show');
Route::get('/show_menu/{id}' ,'ProductController@menu_details')->name('menu.details');
Route::get('/menue/{id}' ,'ProductController@menu_show')->name('menu.show');
Route::get('/images/{id}' ,'ProductController@img_show')->name('img.show');
Route::get('/show_img/{id}' ,'ProductController@img_details')->name('image.details');


Route::get('/all_products' ,'ProductController@index')->name('all_products');
Route::get('/catalogs' ,'ProductController@catalogs')->name('catalogs');
Route::post('/contact' ,'AdminController@contact')->name('contact');


Route::get('/logout', 'Auth\LoginController@logout');

// CMS
Route::get('/admin/slider_management', 'AdminController@slider_management')->name('slider_management')->middleware('admin');

Route::get('/admin/users_management', 'AdminController@user_management')->name('user_management')->middleware('admin');


Route::get('/admin/products_management', 'AdminController@product_management')->name('products_management')->middleware('admin');


Route::get('/admin/management', 'AdminController@image_management')->name('image_management')->middleware('admin');


Route::get('/admin/catalog', 'AdminController@catalog_management')->name('catalog_management')->middleware('admin');



Route::get('/admin/menu', 'AdminController@menu_management')->name('menu_management')->middleware('admin');
Route::get('/admin/contact', 'AdminController@contact_management')->name('contact_management')->middleware('admin');



//user
Route::post('/admin/add_user', 'AdminController@add_user')->name('add_user')->middleware('admin');
Route::patch('/admin/update_user/', 'AdminController@update_user')->name('update_user')->middleware('admin');
Route::delete('/admin/delete_user/', 'AdminController@destroy_user')->name('destroy_user')->middleware('admin');


//product_img
Route::post('/admin/add', 'AdminController@add')->name('add')->middleware('admin');
Route::patch('/admin/update/', 'AdminController@update')->name('update')->middleware('admin');
Route::delete('/admin/delete/', 'AdminController@destroy')->name('destroy')->middleware('admin');
Route::get('/admin/images/{id}', 'AdminController@products_for_image')->middleware('admin');
Route::post('/admin/image/add', 'AdminController@add_for_image')->name('add_for_image')->middleware('admin');
Route::patch('/admin/image/update', 'AdminController@update_for_image')->name('update_for_image')->middleware('admin');
Route::delete('/admin/image/delete', 'AdminController@destroy_for_image')->name('destroy_for_image')->middleware('admin');




//product
Route::post('/admin/add_product', 'AdminController@add_product')->name('add_product')->middleware('admin');
Route::patch('/admin/update_product/', 'AdminController@update_product')->name('update_product')->middleware('admin');
Route::delete('/admin/delete_product/', 'AdminController@destroy_product')->name('destroy_product')->middleware('admin');

//menu
Route::post('/admin/add_menu', 'AdminController@add_menu')->name('add_menu')->middleware('admin');
Route::patch('/admin/update_menu/', 'AdminController@update_menu')->name('update_menu')->middleware('admin');
Route::delete('/admin/delete_menu/', 'AdminController@destroy_menu')->name('destroy_menu')->middleware('admin');
Route::get('/admin/menu/{id}', 'AdminController@products_for_menu')->middleware('admin');
Route::post('/admin/menu/add', 'AdminController@add_for_menu')->name('add_for_menu')->middleware('admin');
Route::patch('/admin/menu/update', 'AdminController@update_for_menu')->name('update_for_menu')->middleware('admin');
Route::delete('/admin/menu/delete', 'AdminController@destroy_for_menu')->name('destroy_for_menu')->middleware('admin');



//catalogs
Route::post('/admin/add_catalog', 'AdminController@add_catalog')->name('add_catalog')->middleware('admin');
Route::patch('/admin/update_catalog/', 'AdminController@update_catalog')->name('update_catalog')->middleware('admin');
Route::delete('/admin/delete_catalog/', 'AdminController@destroy_catalog')->name('destroy_catalog')->middleware('admin');


//sliders
Route::post('/admin/add_slider', 'AdminController@add_slider')->name('add_slider')->middleware('admin');
Route::patch('/admin/update_slider/', 'AdminController@update_slider')->name('update_slider')->middleware('admin');
Route::delete('/admin/delete_slider/', 'AdminController@destroy_slider')->name('destroy_slider')->middleware('admin');
Route::patch('/admin/update_logo/', 'AdminController@update_logo')->name('update_logo')->middleware('admin');



//contact
Route::get('/admin/message/{id}', 'AdminController@message')->name('message')->middleware('admin');  
Route::delete('/admin/delete_contact/', 'AdminController@destroy_contact')->name('destroy_contact')->middleware('admin');





