<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\TeamController;



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

Route::group(['prefix' => '/admin', 'middleware' => 'AuthenticateMiddleware'], function () {
    Route:: get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

});

Route::group(array('prefix' => '/admin'), function() {
    Auth::routes();



    Route:: get('/login', [LoginController::class, 'showLoginForm'])->name('admin-login');
    Route:: post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin-logout');
    Route::post('/category', [\App\Http\Controllers\Admin\AdminCategoryController::class, 'admin-category'])->name('admin-category');
});

Route:: get('/contact', [ContactController::class, 'contact'])->name('contact');
Route:: get('/category', [CategoryController::class, 'category'])->name('category');
Route:: get('/team', [TeamController::class, 'team'])->name('team');
Route:: get('/single', [SingleController::class, 'single'])->name('single');
Route:: get('/admin', [AdminController::class, 'admin'])->name('admin');
Route:: get('/register', [LoginController::class, 'show_signup_form'])->name('register');
Route:: post('/register', [LoginController::class, 'process_signup']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');


