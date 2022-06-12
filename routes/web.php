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
    \Artisan::call('optimize');
    // session()->flush();
    dd("All clear!");
});

//=============== Frontend Routes ====================//

Route::get('/', [FrontendController::class, 'index'])->name('root');
Route::post('/contact-us', [FrontendController::class, 'contactUs']);

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

        //============ Career ================//
        Route::get('/career/manage', 'Backend\CareerController@index');
        Route::get('/career/create', 'Backend\CareerController@create');
        Route::post('/career/store', 'Backend\CareerController@store');
        Route::get('/career/edit/{career}/{slug}', 'Backend\CareerController@edit');
        Route::post('/career/update/{career}', 'Backend\CareerController@update');
        Route::get('/career/delete/{career}/{slug}', 'Backend\CareerController@destroy');

        //============ Mission & Vision ================//
        Route::get('/mission/vision/manage/{id}', 'Backend\MissionVisionController@index');
        Route::post('/mission/vision/store', 'Backend\MissionVisionController@store');

        //============ About ================//
        Route::get('/about/manage/{id}', 'Backend\AboutController@index');
        Route::post('/about/store', 'Backend\AboutController@store');

        //============ Industry service ================//
        Route::get('/industry/manage', 'Backend\IndustryController@index');
        Route::get('/industry/create', 'Backend\IndustryController@create');
        Route::post('/industry/store', 'Backend\IndustryController@store');
        Route::get('/industry/edit/{id}', 'Backend\IndustryController@edit');
        Route::post('/industry/update/{id}', 'Backend\IndustryController@update');
        Route::get('/industry/delete/{id}', 'Backend\IndustryController@destroy');

        //============ Testimonial ================//
        Route::get('/testimonial/manage', 'Backend\TestimonialController@index');
        Route::get('/testimonial/create', 'Backend\TestimonialController@create');
        Route::post('/testimonial/store', 'Backend\TestimonialController@store');
        Route::get('/testimonial/edit/{testimonial}', 'Backend\TestimonialController@edit');
        Route::post('/testimonial/update/{testimonial}', 'Backend\TestimonialController@update');
        Route::get('/testimonial/delete/{testimonial}', 'Backend\TestimonialController@destroy');

        //============ Expert ================//
        Route::get('/expert/manage', 'Backend\ExpertController@index');
        Route::get('/expert/create', 'Backend\ExpertController@create');
        Route::post('/expert/store', 'Backend\ExpertController@store');
        Route::get('/expert/edit/{expert}', 'Backend\ExpertController@edit');
        Route::post('/expert/update/{expert}', 'Backend\ExpertController@update');
        Route::get('/expert/delete/{expert}', 'Backend\ExpertController@destroy');

        //============ Solution ================//
        Route::get('/solution/manage/{id}', 'Backend\SolutionController@index');
        Route::post('/solution/store', 'Backend\SolutionController@store');

        //============ Consulting ================//
        Route::get('/consult/manage/{id}', 'Backend\SolutionController@consult_index');
        Route::post('/consult/store', 'Backend\SolutionController@consult_store');
    });
});
