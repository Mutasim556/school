<?php

use App\Http\Controllers\admin\admin\adminController;
use App\Http\Controllers\admin\adminProfileController;
use App\Http\Controllers\admin\auth\authController;
use App\Http\Controllers\admin\logo\LogoController;
use App\Http\Controllers\doctor\doctorController;
use App\Http\Controllers\school\GalleryController;
use App\Http\Controllers\school\NoticeController;
use App\Http\Controllers\School\OthersController;
use App\Http\Controllers\school\SliderController;
use App\Http\Controllers\school\TeacherController;
use App\Http\Controllers\SchoolFrontController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('MGMLHS/cpanel', function () {
    return view('admin.auth.login');
})->name('login');

Route::get('/', function () { 
    return view('welcome');
});


Route::get('/admin-home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('status_check');


//admin section 

//admin authentication
Route::controller(authController::class)->group(function(){
    Route::post('admin-login','Login')->name('admin_login');
    Route::get('admin-logout','Logout')->name('admin_logout');

    //forgot password
    Route::get('admin-forget-password','ForgotPasswordForm')->name('admin_forgot_password');
    Route::post('admin-forget-password','ForgotPasswordMail')->name('admin_forgot_password');

    //reset password
    Route::get('admin-reset-password','ResetPasswordForm')->name('admin_reset_password');
    Route::post('admin-reset-password','ResetPassword')->name('admin_reset_password');
});
//admin crud
Route::middleware('auth','status_check')->group(function(){
    //all admins
    Route::controller(adminController::class)->group(function(){
        Route::get('all-admins','AllAdmins')->name('all_admins');
        Route::post('insert-admin','InsertAdmin');
        Route::post('search-admin','SearchAdmin');
        Route::get('update-admin-status/{id}','UpdateAdminStatus');
        Route::get('get-admin-info/{id}','GetAdminInfo');
        Route::post('update-admin','UpdateAdmin');
        Route::get('delete-admin/{id}','DeleteAdmin');
    });

    //admin profile
    Route::controller(adminProfileController::class)->group(function(){
        Route::get('admin-profile','AdminProfile')->name('admin_profile');
        Route::post('update-basic-info','UpdateBasicInfo')->name('update_basic_info');
        Route::post(env('APP_NAME').'update-password','UpdatePassword')->name('update_password');
    });

    //doctors
    Route::controller(doctorController::class)->group(function(){
        Route::get('all-doctors','AllDoctors')->name('all_doctors');
        Route::get('doctor-speciality','DoctorSpeciality')->name('doctor_speciality');
    });

    //logo
    Route::controller(LogoController::class)->group(function(){
        Route::get('logo','GetLogo')->name('logo');
        Route::post('upload-logo','UploadLogo')->name('upload_logo');
        
        Route::post('search-logo','SearchLogo')->name('search_logo');
        Route::get('/logo-status-change/{id}','LogoStatusChange');
        Route::get('/delete-logo/{id}','DeleteLogo');
        Route::post('upload-school-logo','UploadSchoolLogo')->name('upload_school_logo');
    
    });
    Route::controller(SliderController::class)->group(function(){
        Route::get('school-main-slider','SchoolMainSlider');
        Route::post('insert-main-slider','SchoolMainSliderInsert');
        Route::get('delete-main-slider/{id}','DeleteMainSlider');
    });

    Route::controller(NoticeController::class)->group(function(){
        Route::get('all-notice','AllNotice');
        Route::post('notice-insert','NoticeInsert');
        Route::post('notice-search','NoticeSearch');
        Route::get('notice-status-update/{id}','NoticeStatusUpdate');
        Route::get('notice-delete/{id}','NoticeDelete');
    });

    Route::controller(OthersController::class)->group(function(){
        Route::get('school-introduction','SchoolIntroduction');
        Route::post('school-introduction-update','SchoolIntroductionUpdate');

        Route::get('headmaster-speech','HeadmasterSpeech');
        Route::post('headmaster-speech-update','HeadmasterSpeechUpdate');
        Route::get('address-contact','AddressContact');
        Route::post('school-address-update','SchoolAddressUpdate');
        Route::get('get-district/{id}','GetDistrict');
        Route::get('get-upazila/{id}','GetUpazila');
    });

    Route::controller(GalleryController::class)->group(function(){
        Route::get('school-gallery','SchoolGallery');
        Route::post('school-gallery','SchoolGalleryInsert');
        Route::get('school-gallery-delete/{id}','SchoolGalleryDelete');
        // Route::post('school-introduction-update','SchoolIntroductionUpdate');
    });

    Route::controller(TeacherController::class)->group(function(){
        Route::get('school-teacher','SchoolTeacher');
        Route::post('teacher-insert','TeacherInsert');
        Route::post('search-teacher','SearchTeacher');
        Route::get('update-teacher-status/{id}','UpdateTeacherStatus');
        Route::get('get-teacher-info/{id}','GetTeacherInfo');
        Route::post('update-teacher','UpdateTeacher');
        Route::get('delete-teacher/{id}','DeleteTeacher');
    });

});

Route::controller(SchoolFrontController::class)->group(function(){
    Route::get('contact-us','ContactUs');
    Route::get('gallery','SchoolGallery');
    Route::get('school-notice','AllNotice');
    Route::get('about-school','AboutSchool');
    Route::get('school-teachers','GetTeachers');
    Route::get('teacher-profile/{id}','TeacherProfile');
});
