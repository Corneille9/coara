<?php

use App\Http\Controllers\Company\ApiKeysControllers;
use App\Http\Controllers\Company\CompanyPermissionsControllers;
use App\Http\Controllers\Company\CompanyRolesControllers;
use App\Http\Controllers\Company\CompanyUsersControllers;
use App\Http\Controllers\Company\DashboardController;
use App\Http\Controllers\Company\CompanySettingsControllers;
use App\Http\Controllers\Company\CompanySecurityControllers;
use App\Http\Controllers\Company\CompanyTablesControllers;
use App\Http\Controllers\NewsControllers;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\Personal\PersonalSettingsControllers;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\EnterprisesController;
use App\Http\Controllers\VirtualizationBuilder;
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
        // add all users routes
        Route::get('/news', [NewsControllers::class, "index"])
            ->middleware(["auth"])
            ->name('news');

        Route::get('/search', [SearchController::class, "index"])
            ->middleware(['auth'])
            ->name('search');

        Route::get('/enterprises', [EnterprisesController::class, "index"])->middleware(['auth'])->name('enterprises.list');
        Route::get('/enterprise', [EnterprisesController::class, "index"])->middleware(['auth'])->name('enterprise.details');

        Route::group(['prefix' => 'offers', 'as' => 'offers.'], function () {
            Route::get('/details', [OffersController::class, "getOffer"])->middleware(['auth'])->name('details');
            Route::get('/', [OffersController::class, "index"])->middleware(['auth'])->name('show');
        });

        // add personal users routes
        Route::group(['prefix' => 'personal', 'as' => 'personal.'], function () {
            Route::get('/settings', [PersonalSettingsControllers::class, "index"])->middleware(['auth'])->name('settings');
        });

        // add enterprises routes
        Route::group(['prefix' => 'company', 'as' => 'company.'], function () {
            Route::get('/dashboards', [DashboardController::class, "index"])->middleware(['auth'])->name('dashboards');
            Route::get('/dashboard/view', [DashboardController::class, "view"])->middleware(['auth'])->name('dashboard.view');
            Route::get('/dashboard/new', [DashboardController::class, "new"])->middleware(['auth'])->name('dashboard.new');
            Route::post('/dashboard/datasource', [VirtualizationBuilder::class, "getData"])->middleware(['auth'])->name('dashboard.datasource.get');

            Route::get('/tables', [CompanyTablesControllers::class, "index"])->middleware(['auth'])->name('tables');
            Route::post('/tables/create', [CompanyTablesControllers::class, "create"])->middleware(['auth'])->name('tables.create');
            Route::post('/tables/import', [CompanyTablesControllers::class, "importData"])->middleware(['auth'])->name('tables.import.data');
            Route::post('/tables/load', [CompanyTablesControllers::class, "getTableData"])->middleware(['auth'])->name('tables.load.data');
            Route::post('/tables/store', [CompanyTablesControllers::class, "store"])->middleware(['auth'])->name('tables.load.store');
            Route::post('/tables/update', [CompanyTablesControllers::class, "update"])->middleware(['auth'])->name('tables.update');

            Route::get('/settings', [CompanySettingsControllers::class, "index"])->middleware(['auth'])->name('settings');
            Route::get('/security', [CompanySecurityControllers::class, "index"])->middleware(['auth'])->name('security');
            Route::get('/apiKeys', [ApiKeysControllers::class, "index"])->middleware(['auth'])->name('apikeys');
            Route::get('/users', [CompanyUsersControllers::class, "index"])->middleware(['auth'])->name('users.list');
            Route::get('/user', [CompanyUsersControllers::class, "index"])->middleware(['auth'])->name('user.details');
            Route::get('/roles', [CompanyRolesControllers::class, "index"])->middleware(['auth'])->name('roles.list');
            Route::get('/role', [CompanyRolesControllers::class, "getRole"])->middleware(['auth'])->name('role.details');
            Route::get('/permissions', [CompanyPermissionsControllers::class, "index"])->middleware(['auth'])->name('permissions');
        });

    });
require __DIR__ . '/auth.php';
