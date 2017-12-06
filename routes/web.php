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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/banner', 'bannercontroller@index');
Route::get('/banner/create', 'bannercontroller@create');
Route::post('/banner', 'bannercontroller@store');
Route::get('/banner/edit/{id}', 'bannercontroller@edit');
Route::get('/banner/delete/{id}', 'bannercontroller@delete');
Route::get('/status/banner', 'bannercontroller@statusupdate');


Route::post('dropzoneUploadFile',array('as'=>'dropzone.uploadfile','uses'=>'CardetailsController@dropzone'));

Route::resource('user', 'UserController');
Route::resource('testimonials','TestimonialsController');
Route::resource('appoinment','AppoinmentController');
Route::resource('carfeatures', 'CarfeaturesController');
Route::resource('carmake','CarmakeController');
Route::resource('model','CarmodelController');
Route::resource('submodel','CarSubmodelController');
Route::resource('details', 'CardetailsController');
Route::resource('color', 'ColorController');

// Route::get('getmodel','CarmodelController@checkmodel');

Route::get('/sendmail/{token}', 'Auth\MailController@sendmail');

Route::prefix('status')->group(function(){

Route::get('/user', 'UserController@statusupdate');
Route::get('/details', 'CardetailsController@statusupdate');
Route::get('/carmake','CarmakeController@statusupdate');
Route::get('/model','CarmodelController@statusupdate');
Route::get('/submodel','CarSubmodelController@statusupdate');
Route::get('/carfeatures', 'CarfeaturesController@statusupdate');
Route::get('/color', 'ColorController@statusupdate');

});

Route::post('bannerUploadFile','Bannercontroller@savebannerimage');

Route::get('carmodel','CarmodelController@getmodel');
Route::get('carsubmodel','CarmodelController@getsubmodel');