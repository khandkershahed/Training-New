<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\CourseEnrollController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JobController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Payment\StripeController;
use Illuminate\Support\Facades\Route;

//Homepage
Route::get('/', [HomeController::class, 'index'])->name('homepage');



//Training
Route::get('/training', [HomeController::class, 'training'])->name('training');
Route::get('/all-courses', [HomeController::class, 'allCourses'])->name('courses.all');
Route::get('/course/{id}/{slug}', [HomeController::class, 'courseDetails']);

Route::get('/course-registration', [HomeController::class, 'courseRegistration'])->name('course.registration');
Route::post('/course-registration/store', [HomeController::class, 'courseRegistrationStore'])->name('course.registration.store');

Route::post('/contact_us', [ContactController::class, 'store'])->name('contactus.store');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

//Service Created By Ashiquzzaman
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/terms-and-condition', [HomeController::class, 'termsCondition'])->name('termsCondition');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');


Route::get('/contact/location', [HomeController::class, 'location'])->name('location');
Route::get('support', [HomeController::class, 'Support'])->name('support');
Route::get('/newsletter', [NewsletterController::class, 'newsletter']);
Route::post('/newsletter/store', [NewsLetterController::class, 'store'])->name('newsletter.store');



Route::get('/about-us', [HomeController::class, 'about'])->name('about');



//Course Enroll
Route::controller(CourseEnrollController::class)->group(function () {
    Route::post('/course/enroll/{course_id}', 'CourseEnroll')->name('course.enroll');

    //Add To Enroll
    Route::post('/add-to-enroll/{course_id}', 'AddToEnroll');
    Route::post('/add-to-enroll-online', 'AddToEnrollOnline');
});
