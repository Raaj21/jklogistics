<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WebController;

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


Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/index', [WebController::class, 'index'])->name('index');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/services', [WebController::class, 'services'])->name('services');

Route::controller(WebController::class)->group(function () {
	Route::get('service-details/{slug}', 'service_details')->name('service-details');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('branch', BranchController::class);
    Route::resource('service', ServiceController::class);
    Route::controller(ServiceController::class)->group(function () {

        Route::get('/services/servicemaster/', 'masterindex')->name('service.masterindex');
        Route::get('/services/servicemastercreate/', 'mastercreate')->name('service.mastercreate');
        Route::POST('/services/servicemasterstore/', 'masterstore')->name('service.masterstore');
        Route::DELETE ('/services/masterdestroy/{id}', 'masterdestroy')->name('service.masterdestroy');
        Route::get('/services/masteredit/{id}', 'masteredit')->name('service.masteredit');
        Route::PUT('/services/masterupdate/', 'masterupdate')->name('service.masterupdate');







    });
});
