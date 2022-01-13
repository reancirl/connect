<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('frontend.home');
});

Auth::routes(['register' => false]);

Route::get('/thank-you', [HomeController::class, 'thankyou'])->name('thankyou');
Route::get('/join-our-inner-circle', [HomeController::class, 'join_our_inner_circle'])->name('join_our_inner_circle');

Route::get('/resale-real-estate-services', [HomeController::class, 'rres'])->name('rres');
Route::get('/investment-to-build-wealth', [HomeController::class, 'itbw'])->name('itbw');
Route::get('/investors-faq', [HomeController::class, 'if'])->name('if');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::resource('post', PostController::class);
    Route::resource('category', PostCategoryController::class);
    Route::resource('neighborhood', NeighborhoodController::class);
    Route::resource('developer', DeveloperController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('media', MediaController::class);
    Route::resource('page', PagesController::class);
    Route::resource('menu', MenuController::class);

    Route::get('import/projects', [ProjectController::class, 'import_view'])->name('project.import_view');
    Route::post('import/projects', [ProjectController::class, 'import'])->name('project.import');
});

