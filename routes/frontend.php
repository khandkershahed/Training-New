<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Frontend\CourseEnrollController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

//Homepage
Route::get('/', [HomeController::class, 'index'])->name('homepage');

//Training
Route::get('/training', [HomeController::class, 'training'])->name('training');

//Course All & Deatils Start
Route::get('/all-courses', [HomeController::class, 'allCourses'])->name('courses.all');
Route::get('/course/{id}/{slug}', [HomeController::class, 'courseDetails']);
//Course All & Deatils End

//courseServiceDetails
Route::get('/course-service/{id}/{slug}', [HomeController::class, 'courseServiceDetails']);

//courseCategoryDetails
// Route::get('/course/category/{id}/{slug}', [HomeController::class, 'courseCategoryDetails']);

// Course Registration Start
Route::get('/course-registration', [HomeController::class, 'courseRegistration'])->name('course.registration');
Route::post('/course-registration/store', [HomeController::class, 'courseRegistrationStore'])->name('course.registration.store');
Route::controller(HomeController::class)->group(function () {

    Route::get('/category-register/ajax/{course_section_id}', 'GetRegisterCategory');
    Route::get('/course-get/ajax/{course_category_id}', 'GetRegisterCourse');

});
// Course Registration End

//Course Query
Route::post('/course-query', [HomeController::class, 'courseQueryStore'])->name('course.query.store');

Route::post('/contact_us', [ContactController::class, 'store'])->name('contactus.store');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

//Service Created By Ashiquzzaman

//serviceDetails
Route::get('/services/details/{id}/{slug}', [HomeController::class, 'serviceDetails']);

//categoryDetails
Route::get('/category/details/{id}/{slug}', [HomeController::class, 'categoryDetails']);

Route::get('/category/ajax/{course_section_id}', [HomeController::class, 'GetCategory']);
Route::get('/course/ajax', [HomeController::class, 'getCourseName']);

Route::get('/course-get/ajax/{course_section_id}', [HomeController::class, 'GetCourse']);

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

//Course Search By Home Page
Route::post('/search-course', [HomeController::class, 'SearchCourse'])->name('search.course');

// User Register Course List 
Route::get('/user/register/course/list', [HomeController::class, 'RegisterCourseList'])->name('user.register.course.list');
Route::get('/user/register/course/details/{course_id}', [HomeController::class, 'RegisterCourseDetails'])->name('register.course.details');
