<?php

use Illuminate\Support\Facades\Auth;
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

Route::post('/customers', 'StoreController')->name('customers.store');
Route::group(['namespace' => 'Projects', 'prefix' => '/projects'], function () {
    Route::get('/ajax/{project}', 'AjaxController')->name('projects.ajax');
});

Route::get('/', 'IndexController')->name('main.index');
Route::group(['namespace' => 'admin'], function () {
    Route::group(['namespace' => 'greetings', 'prefix' => '/admin/greetings'], function () {
        Route::patch('/{greeting}', 'UpdateController')->name('greetings.update');
    });
    Route::group(['namespace' => 'services', 'prefix' => '/admin/services'], function () {
        Route::post('/', 'StoreController')->name('services.store');
        Route::patch('/{service}', 'UpdateController')->name('services.update');
        Route::delete('/{service}', 'DestroyController')->name('services.destroy');
    });
    Route::group(['namespace' => 'Projects', 'prefix' => '/admin/projects'], function () {
        Route::post('/', 'StoreController')->name('projects.store');
        Route::patch('/{project}', 'UpdateController')->name('projects.update');
        Route::delete('/{project}', 'DestroyController')->name('projects.destroy');
    });
    Route::group(['namespace' => 'about', 'prefix' => '/admin/about'], function () {
        Route::post('/', 'StoreController')->name('about.store');
        Route::patch('/{story}', 'UpdateController')->name('about.update');
        Route::delete('/{story}', 'DestroyController')->name('about.destroy');
    });
    Route::group(['namespace' => 'team', 'prefix' => '/admin/team'], function () {
        Route::post('/', 'StoreController')->name('team.store');
        Route::patch('/{worker}', 'UpdateController')->name('team.update');
        Route::delete('/{worker}', 'DestroyController')->name('team.destroy');
    });
    Route::group(['middleware' => ['auth', 'isAdmin']], function () {
        Route::get('/admin', 'IndexController')->name('admin.index');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
