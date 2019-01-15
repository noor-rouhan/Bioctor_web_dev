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



Route::get('/report', function () {
    return view('draw');
});

// Route::get('/patient', function () {
//     return view('patientInput');
// });


// Route::get('/logout', function(){
//      auth()-> logout();
//      return view('welcome');

//      });

Route::get('/logout', 'Auth\LoginController@logout');


// Route::group(['middleware' => 'auth:api'], function(){
//     Route::get('/users','UserController@index');
//     Route::get('users/{user}','UserController@show');
//     Route::patch('users/{user}','UserController@update');
//     Route::get('users/{user}/orders','UserController@showOrders');
//     Route::patch('products/{product}/units/add','ProductController@updateUnits');
//     Route::patch('orders/{order}/deliver','OrderController@deliverOrder');
//     Route::resource('/orders', 'OrderController');
//     Route::resource('/products', 'ProductController')->except(['index','show']);
// });


Route::prefix('patient')->group(function(){
     Route::resource('/edit','PatientController')->middleware('auth');
     Route::get('/edit/input_panel','PatientController@patient_input_panel')->middleware('auth');
   //  Route::resource('/edit','PatientController');
   //  Route::resource('edit','PatientController');
   //  Route::resource('edit','PatientController');
 });


//Route::group(['middleware' => ['web']], function () {
    //
//});

//Route::resource('edit','PatientController');





Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();




