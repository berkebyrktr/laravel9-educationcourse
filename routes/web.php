<?php

use Illuminate\Support\Facades\Route;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//**********************ELEARNING ROUTES***********************    */

Route::get('/', [\App\Http\Controllers\Elearning\HomeController::class, 'index']) -> name('home');
Route::get('/about', [\App\Http\Controllers\Elearning\AboutController::class, 'index']) -> name('about');
Route::get('/contact', [\App\Http\Controllers\Elearning\ContactController::class, 'index']) -> name('contact');
Route::view('/loginuser', 'auth.login') -> name('loginuser');
Route::view('/registeruser', 'auth.register') -> name('registeruser');
Route::get('/logout', [\App\Http\Controllers\Elearning\AuthController::class, 'logout']) -> name('logout');
Route::get('/categories', [\App\Http\Controllers\Elearning\CategoryController::class, 'index']) -> name('categories');
Route::get('/courses/{id}', [\App\Http\Controllers\Elearning\CoursesController::class, 'index']) -> name('courses');
Route::get('/user_courses', [\App\Http\Controllers\Elearning\CoursesController::class, 'user_courses']) -> name('user_courses');
Route::get('/not_found', [\App\Http\Controllers\Elearning\NotFoundController::class, 'index']) -> name('not_found');
Route::get('/team', [\App\Http\Controllers\Elearning\TeamController::class, 'index']) -> name('team');
Route::get('/testimonial', [\App\Http\Controllers\Elearning\TestimonialController::class, 'index']) -> name('testimonial');

//**********************ADMIN ROUTES***********************    */
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index']) -> name('admin');
Route::get('/admin/charts', [App\Http\Controllers\Admin\ChartController::class, 'index']) -> name('admin_chart');
Route::get('/admin/not_found', [App\Http\Controllers\Admin\NotFoundController::class, 'index']) -> name('admin_not_found');
Route::get('/admin/account', [App\Http\Controllers\Admin\AccountController::class, 'index']) -> name('admin_account');
Route::get('/admin/help', [App\Http\Controllers\Admin\HelpController::class, 'index']) -> name('admin_help');
Route::get('/admin/docs', [App\Http\Controllers\Admin\DocsController::class, 'index']) -> name('admin_docs');
Route::get('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'index']) -> name('admin_login');
Route::get('/admin/notifications', [App\Http\Controllers\Admin\NotificationsController::class, 'index']) -> name('admin_notifications');
Route::get('/admin/order', [App\Http\Controllers\Admin\OrderController::class, 'index']) -> name('admin_order');
Route::get('/admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']) -> name('admin_category');
Route::get('/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create']) -> name('admin_category_create');
Route::post('/admin/category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store']) -> name('admin_category_store');
Route::get('/admin/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']) -> name('admin_category_edit');
Route::post('/admin/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']) -> name('admin_category_update');
Route::get('/admin/category/show/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'show']) -> name('admin_category_show');
Route::get('/admin/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']) -> name('admin_category_delete');
Route::get('/admin/settings', [App\Http\Controllers\Admin\SettingsController::class, 'index']) -> name('admin_settings');
Route::get('/admin/signup', [App\Http\Controllers\Admin\SignupController::class, 'index']) -> name('admin_signup');
Route::get('/admin/reset_password', [App\Http\Controllers\Admin\ResetPasswordController::class, 'index']) -> name('admin_reset_password');
Route::get('/admin/category/show{id}', [App\Http\Controllers\Admin\ResetPasswordController::class, 'show']) -> name('admin_category_show');
