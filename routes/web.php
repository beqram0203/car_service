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
route::get('/indexm','mianConroller@index');
route::post('/indexm','mianConroller@form');
//admin panel
route::middleware('auth')->prefix('/admin')->group(function (){
    Route::get('/','admin\adminController@index');
    Route::get('slides','mianConroller@ds');
    route::POST('/logout', 'admin\loginController@logout')->name('logout');
    Route::resources([
        'slide' => 'admin\slideController',
        'service'=> 'admin\serviseController'
    ]);
    route::resource('social','admin\SocialLink')->only( 'index','edit','update');
});
Route::get('/login','admin\loginController@index')->name('login');
Route::post('/login','admin\loginController@signin');

