<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserSettingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('about', function () {
    return view('pages/about');
});


Route::get('price', function () {
    return view('pages/price');
});




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [WelcomeController::class, 'index'])->name('index');

Route::get('/admin', [DashboardController::class, 'index'])->name('admin_dashboard_page');

//login//register//forget
Route::get('/login_page', [LoginAdminController::class, 'create'])->name('admin_login_page');
Route::post('/login_admin', [LoginAdminController::class, 'doLogin'])->name('admin_login');
Route::get('/logout_admin', [LoginAdminController::class, 'doLogout'])->name('admin_logout');

//category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category_create', [CategoryController::class, 'create'])->name('category.create');//
Route::post('/category_store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category_show/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/category_edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category_update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category_destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

//course
Route::get('/course_admin', [CourseController::class, 'index'])->name('course.index');
Route::get('/course_videos', [CourseController::class, 'videos'])->name('course.videos');
Route::get('/course', [CourseController::class, 'indexWebsite'])->name('website.course.index');
Route::get('/course_by_category/{id}', [CourseController::class, 'courseByCategories'])->name('course.categories');
Route::get('/course_create', [CourseController::class, 'create'])->name('course.create');
Route::post('/course_store', [CourseController::class, 'store'])->name('course.store');
Route::get('/course_show/{id}', [CourseController::class, 'show'])->name('course.show');
Route::get('/course_edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::post('/course_update/{id}', [CourseController::class, 'update'])->name('course.update');
Route::post('/course_search}', [CourseController::class, 'search'])->name('course.search');
Route::get('/course_destroy/{id}', [CourseController::class, 'destroy'])->name('course.destroy');

//session
Route::get('/session', [SessionController::class, 'index'])->name('session.index');
Route::get('/session_create', [SessionController::class, 'create'])->name('session.create');
Route::post('/session_store', [SessionController::class, 'store'])->name('session.store');
Route::get('/session_show/{id}', [SessionController::class, 'show'])->name('session.show');
Route::get('/session_edit/{id}', [SessionController::class, 'edit'])->name('session.edit');
Route::put('/session_update/{id}', [SessionController::class, 'update'])->name('session.update');
Route::get('/session_destroy/{id}', [SessionController::class, 'destroy'])->name('session.destroy');
Route::get('/session_request_accept/{id}', [SessionController::class, 'acceptSessionRequest'])->name('session.accpet');

//file
Route::get('/file', [FileController::class, 'index'])->name('file.index');
Route::get('/file_create', [FileController::class, 'create'])->name('file.create');
Route::post('/file_store', [FileController::class, 'store'])->name('file.store');
Route::get('/file_show/{id}', [FileController::class, 'show'])->name('file.show');
Route::get('/file_edit/{id}', [FileController::class, 'edit'])->name('file.edit');
Route::post('/file_update/{id}', [FileController::class, 'update'])->name('file.update');
Route::get('/file_destroy/{id}', [FileController::class, 'destroy'])->name('file.destroy');


//chat
Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
Route::get('/chat_create', [ChatController::class, 'create'])->name('chat.create');
Route::post('/chat_store', [ChatController::class, 'store'])->name('chat.store');
Route::post('/send_message/{id}', [ChatController::class, 'sendMessage'])->name('chat.send_message');
Route::get('/get_chat/{id}', [ChatController::class, 'getChat'])->name('chat.get_chat');
Route::get('/chat_show/{id}', [ChatController::class, 'show'])->name('chat.show');
Route::get('/chat_edit/{id}', [ChatController::class, 'edit'])->name('chat.edit');
Route::put('/chat_update/{id}', [ChatController::class, 'update'])->name('chat.update');
Route::get('/chat_destroy/{id}', [ChatController::class, 'destroy'])->name('chat.destroy');

//video
Route::get('/video', [VideoController::class, 'index'])->name('video.index');
Route::get('/video_create', [VideoController::class, 'create'])->name('video.create');
Route::post('/video_store', [VideoController::class, 'store'])->name('video.store');
Route::get('/video_show/{id}', [VideoController::class, 'show'])->name('video.show');
Route::get('/video_edit/{id}', [VideoController::class, 'edit'])->name('video.edit');
Route::post('/video_update/{id}', [VideoController::class, 'update'])->name('video.update');
Route::get('/video_destroy/{id}', [VideoController::class, 'destroy'])->name('video.destroy');


//teacher
Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/teacher', [TeacherController::class, 'indexWebsite'])->name('website.teacher.index');
Route::get('/teacher_create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teacher_store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('/teacher_show/{id}', [TeacherController::class, 'show'])->name('teacher.show');
Route::get('/teacher_edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::post('/teacher_update/{id}', [TeacherController::class, 'update'])->name('teacher.update');
Route::post('/teacher_search', [TeacherController::class, 'search'])->name('teacher.search');
Route::get('/teacher_destroy/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
Route::get('/teacher_session_request/{id}', [TeacherController::class, 'sessionRequest'])->name('teacher.destroy');
Route::post('/teacher_store_rating', [TeacherController::class, 'storeRating'])->name('teacher.store_rating');


//contact us
Route::get('/contact_us', [ContactUsController::class, 'index'])->name('contact_us.index');
Route::get('/contact_us_create', [ContactUsController::class, 'create'])->name('contact_us.create');
Route::post('/contact_us_store', [ContactUsController::class, 'store'])->name('contact_us.store');

//payment
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::get('/payment_show', [PaymentController::class, 'show'])->name('show_packages');
Route::get('/payment_create/{id}', [PaymentController::class, 'create'])->name('payment.create');
Route::post('/payment_store', [PaymentController::class, 'store'])->name('payment.store');

//user setting
Route::get('/user_list', [UserSettingController::class, 'index'])->name('user.index');
Route::get('/user_destroy/{id}', [UserSettingController::class, 'destroy'])->name('user.destroy');
Route::get('/student_setting', [UserSettingController::class, 'createStudentSetting'])->name('student_setting.create');
Route::get('/teacher_setting', [UserSettingController::class, 'createTeacherSetting'])->name('teacher_setting.create');
Route::post('/student_setting_update', [UserSettingController::class, 'update'])->name('student_setting.update');
Route::post('/teacher_setting_update', [UserSettingController::class, 'update'])->name('student_setting.update');