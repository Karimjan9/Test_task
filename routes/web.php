<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Article\ArticleTagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [GuestController::class, 'enter_guest'])->name('enter');

Route::get('code_404', [GuestController::class, 'not_found'])->name('error_code');

Route::get('login', [GuestController::class, 'login'])->name('login');

Route::get('articles', [ArticleController::class, 'articles'])->name('articles');

Route::get('show_one/{id}', [ArticleController::class, 'show_one'])->name('show_one');

Route::post('store_comment', [ArticleController::class, 'store_comment'])->name('store_comment');




Route::middleware(['guest'])->group(function () {
    
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login_post');
});


// Route::get('/enter_admin', [GuestController::class, 'enter'])->name('enter');



Route::any('/destroy', [AuthenticatedSessionController::class, 'destroy'])->name('destroy');


Route::group(['middleware' => 'role:admin'], function() {
    Route::prefix('admin')->group(function () {
        Route::name('admin.')->group(function () {

            Route::resource('/admin_work', AdminController::class);

           
        });
    });

    Route::prefix('admin')->group(function () {
        Route::name('admin.')->group(function () {

            Route::resource('/article_tag', ArticleTagController::class);

           
        });
    });
});
