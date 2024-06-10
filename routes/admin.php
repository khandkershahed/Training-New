<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CourseContentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CourseCurriculamController;
use App\Http\Controllers\Admin\CourseManagentController;
use App\Http\Controllers\Admin\CourseOutlineController;
use App\Http\Controllers\Admin\CourseProjectController;
use App\Http\Controllers\Admin\CourseQueryController;
use App\Http\Controllers\Admin\CourseScheduleController;
use App\Http\Controllers\Admin\DynamicCssController;
use App\Http\Controllers\Admin\EmailSettingController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\IconController;
use App\Http\Controllers\Admin\LearnMoreController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\NewsTrendController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\RowController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SpecificationController;
use App\Http\Controllers\Admin\SuccessController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\WhatWeDoPageController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseCategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return redirect()->route('admin.dashboard');
// });

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

// Route::middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:admin'])->prefix(LaravelLocalization::setLocale() . '/admin')->name('admin.')->group(function () {

Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('check-password', [PasswordController::class, 'checkPassword'])->name('checkPassword');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['verified'])->name('dashboard');

    Route::resources(
        [
            'role' => RoleController::class,
            'permission' => PermissionController::class,
            'email-settings' => EmailSettingController::class,
            'faq' => FaqController::class,
        ],
        ['except' => ['show']]
    );

    //Registration
    Route::get('/registration', [RegistrationController::class, 'AllRegistration'])->name('all.registration');
    Route::get('/registration-delete/{id}', [RegistrationController::class, 'DeleteRegistration'])->name('delete.registration');

    Route::resources(
        [
            'user' => UserController::class, //done
            'user-management' => UserManagementController::class,
            'categories' => CategoryController::class, //done
            'tags' => TagController::class, //done
            'icons' => IconController::class, //done
            'services' => ServiceController::class, //done
            // 'experiences'     => ExperienceController::class, //done
            'projects' => ProjectController::class,
            'testimonials' => TestimonialController::class,
            'specifications' => SpecificationController::class,
            'blogs' => BlogController::class,
            'newsletters' => NewsletterController::class,
            'brands' => BrandController::class, //done
            'contacts' => ContactController::class,
            'feature' => FeatureController::class,
            'row' => RowController::class,
            'news-trend' => NewsTrendController::class,
            'homepage' => HomepageController::class,
            'whatwedo' => WhatWeDoPageController::class,
            'learnmore' => LearnMoreController::class,
            'success' => SuccessController::class,

            //Created By Ashiquzzaman
            'course' => CourseController::class,
            'course_curriculam' => CourseCurriculamController::class,
            'course_content' => CourseContentController::class,
            'coupon' => CouponController::class,
            'course_query' => CourseQueryController::class,

            'course_management' => CourseManagentController::class,
            'course_project' => CourseProjectController::class,
            'course_outline' => CourseOutlineController::class,
            'course_schedule' => CourseScheduleController::class,
            'about' => AboutUsController::class,
            'course_category' => CourseCategoryController::class,

        ],
    );

    Route::get('active-mail-configuration', [EmailSettingController::class, 'activeMailConfiguration'])->name('active.mail.configuration');
    Route::put('email-settings', [EmailSettingController::class, 'emailUpdateOrCreate'])->name('email.settings.updateOrCreate');
    Route::post('send-test-mail', [EmailSettingController::class, 'sendTestMail'])->name('send.test.mail');

    Route::post('email-settings/toggle-status/{id}', [EmailSettingController::class, 'toggleStatus'])->name('email-settings.toggle-status');
    Route::post('tags/toggle-status/{id}', [TagController::class, 'toggleStatus'])->name('tags.toggle-status');
    Route::post('icons/toggle-status/{id}', [IconController::class, 'toggleStatus'])->name('icons.toggle-status');
    Route::post('brands/toggle-status/{id}', [BrandController::class, 'toggleStatus'])->name('brands.toggle-status');
    Route::post('banners/toggle-status/{id}', [BrandController::class, 'toggleStatus'])->name('banners.toggle-status');
    Route::post('footers/toggle-status/{id}', [FooterController::class, 'toggleStatus'])->name('footers.toggle-status');
    Route::post('services/toggle-status/{id}', [ServiceController::class, 'toggleStatus'])->name('services.toggle-status');
    Route::post('blogs/toggle-status/{id}', [BlogController::class, 'toggleStatus'])->name('blogs.toggle-status');

    Route::get('/backup', [Controller::class, 'downloadBackup']);

    Route::get('role/{roleId}/give-permission', [RoleController::class, 'givePermission'])->name('role.give-permission');
    Route::patch('role/{roleId}/give-permission', [RoleController::class, 'storePermission'])->name('role.store-permission');

    Route::get('log', [LogController::class, 'index'])->name('log.index');
    Route::get('log/{id}', [LogController::class, 'show'])->name('log.show');
    Route::delete('log/{id}', [LogController::class, 'destroy'])->name('log.destroy');
    Route::get('log/download/{id}', [LogController::class, 'download'])->name('log.download');

    Route::get('activity_logs', [ActivityLogController::class, 'index'])->name('activity_logs.index');
    Route::get('activity_logs/{activity_log}', [ActivityLogController::class, 'show'])->name('activity_logs.show');
    Route::delete('activity_logs/{activity_log}', [ActivityLogController::class, 'destroy'])->name('activity_logs.destroy');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'updateOrcreateSetting'])->name('settings.updateOrCreate');

    Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
    Route::put('/banner', [BannerController::class, 'updateOrcreateBanner'])->name('banner.updateOrCreate');

    Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us.index');
    Route::put('/about-us', [AboutUsController::class, 'updateOrcreateAboutUs'])->name('about-us.updateOrCreate');

    Route::controller(DynamicCssController::class)->group(function () {
        Route::get('/dynamic-css', 'index')->name('css.index');
        Route::put('/dynamic-css/{id}/update', 'update')->name('css.update');
    });

});
