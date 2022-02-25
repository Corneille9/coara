<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OffersDetailsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShowEnterpriseController;
use Illuminate\Support\Facades\Route;

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
})->name("welcome");

Route::group(
    ['prefix' => 'app', 'as' => 'app.', 'middleware' => ['auth']],
    function () {

        Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');

        Route::get('/search', [SearchController::class, "index"])->middleware(['auth'])->name('search');

        Route::group(['prefix' => 'offers', 'as' => 'offers.'], function () {
            Route::get('/show', [OffersDetailsController::class, "index"])->middleware(['auth'])->name('show');
            Route::get('/showAll', [OffersDetailsController::class, "index"])->middleware(['auth'])->name('showAll');
        });

        Route::group(['prefix' => 'enterprise', 'as' => 'enterprise.'], function () {
            Route::get('/show', [ShowEnterpriseController::class, "index"])->middleware(['auth'])->name('show');
            Route::get('/showAll', [ShowEnterpriseController::class, "index"])->middleware(['auth'])->name('showAll');
        });
    });
require __DIR__ . '/auth.php';
