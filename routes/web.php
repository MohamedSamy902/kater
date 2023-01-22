<?php

use App\Http\Controllers\ArticalController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryDetalisController;
use App\Http\Controllers\HealthcareController;
use App\Http\Controllers\HealthcareDetailsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiteCotroller;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\WellBeingController;
use App\Http\Controllers\WellBeingDetalisController;
use App\Models\Healthcare;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


@include_once('admin_web.php');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Auth::routes();

        Route::group(
            [
                'prefix' => 'dashboard',
                'middleware' => ['auth'],
            ],

            function () {
                /** Start Route Users **/
                Route::resource('users', UserController::class);
                Route::get('/', function () {
                    return 'index';
                })->name('index');
                /** End Route Users **/

                /** Start Route Roles **/
                Route::resource('roles', RoleController::class)->except(['show']);
                /** End Route Roles **/
                ['TimeLine'];
                /** Start Route Roles **/
                Route::resource('sliders', SliderController::class)->except(['show']);
                Route::resource('events', EventController::class)->except(['show']);


                Route::resource('wellBeing', WellBeingController::class);
                Route::resource('healthcare', HealthcareController::class);
                Route::resource('galleries', GalleryController::class);

                Route::get('galleriesgDetails/{gallery}/create',               [GalleryDetalisController::class, 'create'])->name('galleriesgDetails.create');
                Route::post('galleriesgDetails/store',               [GalleryDetalisController::class, 'store'])->name('galleriesgDetails.store');
                Route::get('galleriesgDetails/{id}/edit',               [GalleryDetalisController::class, 'edit'])->name('galleriesgDetails.edit');
                Route::post('galleriesgDetails/{id}/update',               [GalleryDetalisController::class, 'update'])->name('galleriesgDetails.update');




                // Route::resource('wellBeingDetails', WellBeingDetalisController::class);
                Route::get('wellBeingDetails/{wellBeing}/create',               [WellBeingDetalisController::class, 'create'])->name('wellBeingDetails.create');
                Route::post('wellBeingDetails/store',               [WellBeingDetalisController::class, 'store'])->name('wellBeingDetails.store');
                Route::get('wellBeingDetails/{id}/edit',               [WellBeingDetalisController::class, 'edit'])->name('wellBeingDetails.edit');
                Route::post('wellBeingDetails/{id}/update',               [WellBeingDetalisController::class, 'update'])->name('wellBeingDetails.update');

                Route::get('healthcareDetails/{healthcare}/create',               [HealthcareDetailsController::class, 'create'])->name('healthcareDetails.create');
                Route::post('healthcareDetails/store',               [HealthcareDetailsController::class, 'store'])->name('healthcareDetails.store');
                Route::get('healthcareDetails/{id}/edit',               [HealthcareDetailsController::class, 'edit'])->name('healthcareDetails.edit');
                Route::post('healthcareDetails/{id}/update',               [HealthcareDetailsController::class, 'update'])->name('healthcareDetails.update');


                Route::get('{model}',               [ArticalController::class, 'index'])->name('articles.index');
                Route::get('{model}/create',        [ArticalController::class, 'create'])->name('articles.create');
                Route::post('{model}/store',        [ArticalController::class, 'store'])->name('articles.store');
                Route::get('{model}/edit/{id?}',    [ArticalController::class, 'edit'])->name('articles.edit');
                Route::post('{model}/update/{id}',  [ArticalController::class, 'update'])->name('articles.update');
                /** End Route Roles **/

                /** Start Route Roles **/

                /** End Route Roles **/
            }

        );

        Route::get('about', [SiteCotroller::class, 'about'])->name('about');
        Route::get('/', [SiteCotroller::class, 'index'])->name('index');
        Route::get('impact', [SiteCotroller::class, 'impact'])->name('impact');
        Route::get('healthcare', [SiteCotroller::class, 'healthcare'])->name('healthcare');
        Route::get('healthcare/{id}', [SiteCotroller::class, 'healthcareDetiles'])->name('healthcare.detils');
        Route::get('wellbeing', [SiteCotroller::class, 'wellbeing'])->name('wellbeing');
        Route::get('wellbeing/{id}', [SiteCotroller::class, 'wellbeingDetiles'])->name('wellbeing.detils');
        Route::get('gallery/', [SiteCotroller::class, 'gallery'])->name('gallery');
        Route::get('gallery/{id}', [SiteCotroller::class, 'galleryDetiles'])->name('gallery.detils');
        Route::get('contact', [SiteCotroller::class, 'contact'])->name('contact');


    }
);
