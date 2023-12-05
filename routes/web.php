<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::get('site', [HomeController::class, 'showPortfolio'])->name('portfolio.show');

###### Contnact ######
Route::post('contact/store', [HomeController::class, 'storeContact'])->name('contact.store');
