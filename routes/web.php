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
//
//Route::get('/', function () {
//    return view('templates.home');
//});


Route::get('/admin', function () {
    return view('templates.default');
});
/*Route::get('/admin', function () {
	return view('templates.default.blade.php')
})*/

Route::get('/','FrontController@index')->name('awal');
Route::get('/categories/detailCategories','FrontController@detailCategories')->name('categories.detailCategories');


Route::get('/contact_us', function () {
    return view('frontpage.contact');
});

Route::get('/team', function () {
    return view('frontpage.tim');
});

Route::get('event/detailevent', function () {
    return view('frontpage.detailevent');
});

Route::get('categories/detailcategories', function () {
    return view('frontpage.detailcategories');
});

//belajar crud
Route::get('/admin/client','ClientController@index')->name('client');
Route::get('/admin/client/create','ClientController@create')->name('client.create');
Route::post('/admin/client/create','ClientController@store')->name('client.store');
Route::get('/admin/client/edit/{id}','ClientController@edit')->name('client.edit');
Route::patch('/admin/client/edit/{id}','ClientController@update')->name('client.update');
Route::get('/admin/client/delete/{id}','ClientController@delete')->name('client.delete');

Route::get('/admin/categories','CategoriesController@index')->name('categories');
Route::get('/admin/categories/create','CategoriesController@create')->name('categories.create');
Route::post('/admin/categories/store','CategoriesController@store')->name('categories.store');
Route::post('/admin/delete/{categori}','CategoriesController@destroy')->name('categories.delete');

Route::get('/admin/event','EventController@index')->name('event');
Route::get('/admin/event/create','EventController@create')->name('event.create');
Route::post('/admin/event/create','EventController@store')->name('event.store');
Route::get('/admin/event/edit/{id}','EventController@edit')->name('event.edit');
Route::patch('/admin/event/edit/{id}','EventController@update')->name('event.update');
Route::get('/admin/event/delete/{id}','EventController@delete')->name('event.delete');
Route::get('/admin/event/detail/{id}','EventController@detail')->name('event.detail');

//users
Route::get('users/', function () {
    return view('templates.users.default');
});








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
