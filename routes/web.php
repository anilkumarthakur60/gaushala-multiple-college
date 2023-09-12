<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

Route::controller(FrontendController::class)->as('frontend.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('about', 'about')->name('about');
    Route::get('teachers', 'teachers')->name('teachers');
    Route::get('contact-us', 'contactUs')->name('contact-us');
    Route::get('courses', 'courses')->name('courses');
    Route::get('privacy-policy', 'privacyPolicy')->name('privacy-policy');
    Route::get('terms-and-condition', 'termsAndCondition')->name('terms-and-condition');
    Route::get('faq', 'faq')->name('faq');
    Route::get('blogs', 'blogs')->name('blogs');
    Route::get('blogs/{blog:slug}', 'blogsDetail')->name('blogs.detail');
    Route::post('contact-us', 'contactUsStore')->name('contact-us.store');
});

Route::controller(DashboardController::class)
    ->middleware(['admin', 'auth'])
    ->prefix('dashboard')->group(function () {
        Route::get('', 'index')->name('dashboard');
        Route::resource('blogs', BlogController::class)->scoped(['blog' => 'slug']);
        Route::resource('courses', CourseController::class)->scoped(['course' => 'slug']);
        Route::resource('teachers', TeacherController::class)->scoped(['teacher' => 'slug']);
        Route::resource('contact-us', ContactUsController::class)->only(['index', 'destroy']);
    });

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();
});
