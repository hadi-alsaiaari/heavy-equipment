<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/dashboard',
        'as' => 'dashboard.',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        ################################## Auth ####################################
        Route::get('login',   [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login',  [LoginController::class, 'login'])->name('login.post');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');

        #------------------------------- Protected Routes -------------------------------#
        Route::group(['middleware' => 'auth:web'], function () {
            
            ################################ Welcome Routes ###############################
            Route::get('home', function(){
                return view('dashboard.index');
            })->name('index');

        });
    }
);
