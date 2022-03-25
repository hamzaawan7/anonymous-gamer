<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\E3Controller;
use App\Http\Controllers\GameController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GamesController;
use App\Http\Controllers\Admin\GameRequirementController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\ReviewsController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\GameRequirementsController;
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

    Route::get('/game', [GamesController::class, 'index'])->name('admin-games-index');
    Route::get('/game/create', [GamesController::class, 'create'])->name('admin-games-create');
    Route::post('/game/store', [GamesController::class, 'store'])->name('admin-games-store');
    Route:: get('/game/edit/{id}', [GamesController::class, 'edit'])->name('admin-games-edit');
    Route:: post('/game/update', [GamesController::class, 'update'])->name('admin-games-update');
    Route:: get('/game/show/{id}', [GamesController::class, 'show'])->name('admin-games-show');
    Route:: get('/game/delete/{id}', [GamesController::class, 'delete'])->name('admin-games-delete');

    Route::get('/gamerequirement', [GameRequirementController::class, 'index'])->name('admin-games_required-index');
    Route::get('/gamerequirement/create', [GameRequirementController::class, 'create'])->name('admin-games_required-create');
    Route::post('/gamerequirement/store', [GameRequirementController::class, 'store'])->name('admin-games_required-store');
    Route:: get('/gamerequirement/edit/{game_id}', [GameRequirementController::class, 'edit'])->name('admin-games_required-edit');
    Route:: post('/gamerequirement/update', [GameRequirementController::class, 'update'])->name('admin-games_required-update');
    Route:: get('/gamerequirement/show/{game_id}', [GameRequirementController::class, 'show'])->name('admin-games_required-show');
    Route:: get('/gamerequirement/delete/{game_id}', [GameRequirementController::class, 'delete'])->name('admin-games_required-delete');

    Route::get('/comments', [CommentsController::class, 'index'])->name('admin-comments-index');
    Route::POST('/comments/create', [CommentsController::class, 'create'])->name('admin-comments-create');
    Route::POST('/reply/create', [CommentsController::class, 'reply_create'])->name('admin-reply-create');
    Route::get('/reply/display', [CommentsController::class, 'display'])->name('admin-reply-display');
    Route::get('/comments/view', [CommentsController::class, 'view'])->name('admin-comments-view');
    Route:: get('/comments/edit/{comment_id}', [CommentsController::class, 'edit'])->name('admin-comments-edit');
    Route:: post('/comments/update', [CommentsController::class, 'update'])->name('admin-comments-update');
    Route:: get('/comments/show/{comment_id}', [CommentsController::class, 'show'])->name('admin-comments-show');
    Route:: get('/comments/delete/{comment_id}', [CommentsController::class, 'delete'])->name('admin-comments-delete');

    Route::group(array('prefix' => '/post'), function () {
        Route:: get('/blog', [PostsController::class, 'blogindex'])->name('admin-posts-blogs-index');
        Route:: get('/news', [PostsController::class, 'newsindex'])->name('admin-posts-news-index');

        Route:: post('/update', [PostsController::class, 'update'])->name('admin-posts-update');
        Route:: post('/store', [PostsController::class, 'store'])->name('admin-posts-store');
        Route:: get('/create', [PostsController::class, 'create'])->name('admin-posts-create');
        Route:: get('/post/edit/{id}', [PostsController::class, 'edit'])->name('admin-posts-edit');
        Route:: get('/post/show/{id}', [PostsController::class, 'show'])->name('admin-posts-show');
        Route:: get('/post/delete/{id}', [PostsController::class, 'delete'])->name('admin-posts-delete');
    });

    Route:: get('/review', [ReviewsController::class, 'index'])->name('admin-reviews-index');
    Route:: get('/review/edit/{id}', [ReviewsController::class, 'edit'])->name('admin-reviews-edit');
    Route:: post('/review/update', [ReviewsController::class, 'update'])->name('admin-reviews-update');
    Route:: get('/review/show/{id}', [ReviewsController::class, 'show'])->name('admin-reviews-show');
    Route:: get('/review/delete/{id}', [ReviewsController::class, 'delete'])->name('admin-reviews-delete');
});


Route::get('my-notification/{type}', 'HomeController@myNotification');
Route:: get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route:: get('/blogs/show/{game}', [BlogController::class, 'show'])->name('blogs-show');
Route:: get('/blogs/view/{id}', [BlogController::class, 'view'])->name('blogs-view');

Route:: get('/games', [GameController::class, 'games'])->name('games');
Route:: get('/games/show/{game}', [BlogController::class, 'show'])->name('games-show');

Route:: get('/requirements', [GameRequirementsController::class, 'games_requirement'])->name('requirements');
Route:: get('/requirements/show/{game}', [GameRequirementsController::class, 'show'])->name('requirements-show');


Route:: get('/e3', [E3Controller::class, 'e3'])->name('e3');

Route:: get('/reviews', [ReviewController::class, 'reviews'])->name('reviews');
Route:: get('/news', [NewsController::class, 'news'])->name('news');
Route:: get('/contact', [ContactController::class, 'contact'])->name('contact');

Route:: get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');



