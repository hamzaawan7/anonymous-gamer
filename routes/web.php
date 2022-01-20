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
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\ReviewsController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


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


Route::group(['prefix' => '/admin', 'middleware' => 'AuthenticateMiddleware', 'verified'], function () {
    Route:: get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

});

Route::group(array('prefix' => '/admin'), function () {
    Auth::routes(['verify' => true]);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('admin-register');
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/admin/login');
    })->middleware(['auth', 'signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
    Route::get('/profile', function () {

    })->middleware('verified');

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin-login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin-logout');

    Route::get('/category', [CategoriesController::class, 'index'])->name('admin-categories-index');
    Route::get('/category/create', [CategoriesController::class, 'create'])->name('admin-categories-create');
    Route::post('/category/store', [CategoriesController::class, 'store'])->name('admin-categories-store');
    Route:: get('/category/edit/{id}', [CategoriesController::class, 'edit'])->name('admin-categories-edit');
    Route:: post('/category/update', [CategoriesController::class, 'update'])->name('admin-categories-update');
    Route:: get('/category/show/{id}', [CategoriesController::class, 'show'])->name('admin-categories-show');
    Route:: get('/category/delete/{id}', [CategoriesController::class, 'delete'])->name('admin-categories-delete');

    Route:: get('/post', [PostsController::class, 'index'])->name('admin-posts-index');
    Route:: get('/post/create', [PostsController::class, 'create'])->name('admin-posts-create');
    Route:: post('/post/store', [PostsController::class, 'store'])->name('admin-posts-store');
    Route:: get('/post/edit/{id}', [PostsController::class, 'edit'])->name('admin-posts-edit');
    Route:: post('/post/update', [PostsController::class, 'update'])->name('admin-posts-update');
    Route:: get('/post/show/{id}', [PostsController::class, 'show'])->name('admin-posts-show');
    Route:: get('/post/delete/{id}', [PostsController::class, 'delete'])->name('admin-posts-delete');

    Route:: get('/review', [ReviewsController::class, 'index'])->name('admin-reviews-index');
    Route:: get('/review/edit/{id}', [ReviewsController::class, 'edit'])->name('admin-reviews-edit');
    Route:: post('/review/update', [ReviewsController::class, 'update'])->name('admin-reviews-update');
    Route:: get('/review/show/{id}', [ReviewsController::class, 'show'])->name('admin-reviews-show');
    Route:: get('/review/delete/{id}', [ReviewsController::class, 'delete'])->name('admin-reviews-delete');
});
Route::get('my-notification/{type}', 'HomeController@myNotification');
Route:: get('/contact', [ContactController::class, 'contact'])->name('contact');
Route:: get('/category', [CategoryController::class, 'category'])->name('category');
Route:: get('/team', [TeamController::class, 'team'])->name('team');
Route:: get('/single', [SingleController::class, 'single'])->name('single');
Route:: get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');



