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

Route::get('/', [HomeController::class, 'front_page']);
Route::get('/our-story', [HomeController::class, 'ourstory']);
Route::get('/thank-you', [HomeController::class, 'thankyou'])->name('thankyou');
Route::get('/join-our-inner-circle', [HomeController::class, 'join_our_inner_circle'])->name('join_our_inner_circle');
Route::get('/individual-listing', [HomeController::class, 'individual_listing'])->name('individual_listing');
Route::get('/case-studies', [HomeController::class, 'case_studies'])->name('case_studies');
Route::get('/real-estate-investment-services', [HomeController::class, 'reis'])->name('real_estate_investment_services');
Route::get('/neighbourhood-search',[HomeController::class,'neighbourhood_search'])->name('neighbourhood_search');
Route::get('/our-agents',[HomeController::class,'our_agents'])->name('our_agents');
Route::get('/meet-the-team',[HomeController::class,'meet_the_team'])->name('meet_the_team');
Route::get('/main-search',[HomeController::class,'main_search'])->name('main_search');

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

