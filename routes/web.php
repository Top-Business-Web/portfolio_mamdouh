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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', [HomeController::class, 'showPortfolio'])->name('portfolio.show');
        Route::get('project/{id}/details', [HomeController::class, 'showProjectDetail'])->name('projectDetail.show');

        ###### Contnact ######
        Route::post('contact/store', [HomeController::class, 'storeContact'])->name('contact.store');
    }
);
