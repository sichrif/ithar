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

Route::get('home','HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']],function(){
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    });
    Route::get('Aregister','Admin\DashboardController@registred');
    Route::get('/edit/{id}','Admin\DashboardController@registrededit');
    Route::delete('/delete/{id}','Admin\DashboardController@registredelete');

    Route::put('/register-update/{id}','Admin\DashboardController@registreupdate');
        
 

});
////////////////
Route::group(['middleware' => ['auth', 'citoyen']],function(){
    Route::get('/citoyen', function(){
        return view('citoyens.citoyens');
    });
    });
    //////////////////
    Route::group(['middleware' => ['auth', 'association']],function(){
        Route::get('/association', function(){
            return view('association.association');
        });

        });