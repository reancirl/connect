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

Auth::routes(['register' => false]);

$data = \App\Models\Pages::get();

foreach($data as $d) {
    Route::get($d->link, [HomeController::class, $d->function_name])->name($d->function_name);
}

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
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

