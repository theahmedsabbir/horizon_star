<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\FrontendController;

//=============== Basic Routes ====================//
Route::get('cache', function () {
    \Artisan::call('view:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    // session()->flush();
    dd("All clear!");
});

//=============== Frontend Routes ====================//

Route::get('/', [FrontendController::class, 'index'])->name('root');

Auth::routes();


//=============== Admin Login ====================//
Route::group(['prefix' => 'admin'], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'login']);
    Route::group(['middleware' => 'admin'], function(){
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::post('/logout', [AdminController::class, 'logout']);

        //============ Service ================//
        Route::get('/service/manage', 'Backend\ServiceController@index');
        Route::get('/service/create', 'Backend\ServiceController@create');
        Route::post('/service/store', 'Backend\ServiceController@store');
        Route::get('/service/edit/{service}/{slug}', 'Backend\ServiceController@edit');
        Route::post('/service/update/{service}', 'Backend\ServiceController@update');
        Route::get('/service/delete/{service}/{slug}', 'Backend\ServiceController@destroy');

        //============ Technology ================//
        Route::get('/technology/manage', 'Backend\TechnologyController@index');
        Route::get('/technology/create', 'Backend\TechnologyController@create');
        Route::post('/technology/store', 'Backend\TechnologyController@store');
        Route::get('/technology/edit/{technology}/{slug}', 'Backend\TechnologyController@edit');
        Route::post('/technology/update/{technology}', 'Backend\TechnologyController@update');
        Route::get('/technology/delete/{technology}/{slug}', 'Backend\TechnologyController@destroy');
    });
});
