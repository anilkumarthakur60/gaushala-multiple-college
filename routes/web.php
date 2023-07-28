<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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
    Route::get('blogs/{slug}', 'blogsDetail')->name('blogs.detail');
    Route::post('contact-us', 'contactUsStore')->name('contact-us.store');
});
