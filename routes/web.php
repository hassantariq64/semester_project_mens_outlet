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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/','IndexController@main');
Route::get('/loginuser','LoginController@log');
Route::post('/submit','LoginController@insert');
Route::get('/user','LoginController@authenticate');
Route::post('/logout','LoginController@switchoff');
Route::post('/loginuser','LoginController@loginuser');


// Route::get('/admin','AdminController@login');
Route::get('/main','ProductsController@panel');

Route::get('/products','ProductsController@index');
Route::post('/custom-logout','LoginController@switchoff');
Route::post('/product/store', 'ProductsController@store');
Route::get('product/delete/{id}', 'ProductsController@delete');
Route::get('product/edit/{id}', 'ProductsController@edit');
Route::post('product/update/{id}', 'ProductsController@update');

Route::get('/cart','CartController@buy');
Route::get('/shirts','ShirtsController@upperbody');
Route::get('/dressshirts','ShirtsController@dressbody');
Route::get('/casualshirts','ShirtsController@casualbody');
Route::get('/tshirts','ShirtsController@tshirtsbody');
Route::get('/tuxedoshirts','ShirtsController@tshirtsbody');
Route::get('/products','ProductsController@categ');
Route::get('/pants','PantsController@lowerbody');
Route::get('/casualpants','PantsController@casualpantsbody');
Route::get('/sweatpants','PantsController@sweatpantsbody');
Route::get('/skinnypants','PantsController@skinnypantsbody');
Route::get('/shoes','ShoesController@shoeslowerbody');
Route::get('/casualshoes','ShoesController@casualshoesbody');
Route::get('/boots','ShoesController@bootslowerbody');
Route::get('/loafers','ShoesController@loaferslowerbody');
Route::get('/formalshoes','ShoesController@formalshoeslowerbody');
Route::get('/oxfords','ShoesController@oxfordsshoeslowerbody');
Route::get('/watches','WatchesController@wrist');
Route::get('/quartzwatches','WatchesController@quartzwatcheswrist');
Route::get('/mechanicalwatches','WatchesController@mechanicalwatcheswrist');
Route::get('/sportswatches','WatchesController@sportswatcheswrist');
Route::get('/digitalwatches','WatchesController@digitalwatcheswrist');
Route::get('/jackets','jacketsController@uppers');
Route::get('/leatherjackets','jacketsController@leatherjacketsuppers');
Route::get('/hoodies','jacketsController@hoodiesuppers');
Route::get('/blazers','jacketsController@blazersuppers');
Route::get('/woolenjackets','jacketsController@woolenjacketsuppers');
Route::get('/wallets','walletsController@pocket');
Route::get('/belts','BeltsController@strip');
Route::get('/shades','ShadesController@glasses');
Route::get('/readingglasses','ShadesController@readingshades');
Route::get('/sunglasses','ShadesController@sunglassesshades');
Route::get('/b1','B1Controller@buy');
Route::get('/b2','B2Controller@buy2');
Route::get('/b3','B2Controller@buy3');
Route::get('/checkout','CheckoutController@see');
Route::get('/confirmation','ConfirmationController@checked');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
