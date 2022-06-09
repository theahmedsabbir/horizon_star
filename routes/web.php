<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\FrontendController;

//=============== Basic Routes ====================//
Route::get('cache', function () {
    \Artisan::call('cache:forget spatie.permission.cache');
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

        //============ Product ================//
        Route::get('/product/manage', [ProductController::class, 'index']);
        Route::get('/product/create', [ProductController::class, 'create']);
        Route::post('/product/store', [ProductController::class, 'store']);
        Route::get('/product/edit/{product}', [ProductController::class, 'edit']);
        Route::post('/product/update/{product}', [ProductController::class, 'update']);
        Route::get('/product/delete/{product}', [ProductController::class, 'destroy']);
    });
});
