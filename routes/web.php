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

Route::get('/', function () {
    return view('elearning.index');
});


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']) -> name('home');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//**********************ADMIN PANEL ROUTES***********************    */
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index']) -> name('admin');

//**********************ADMIN CATEGORY ROUTES***********************    */

Route::get('/admin/charts', [App\Http\Controllers\Admin\ChartController::class, 'index']) -> name('admin_chart');
Route::get('/admin/not_found', [App\Http\Controllers\Admin\NotFoundController::class, 'index']) -> name('admin_not_found');
Route::get('/admin/account', [App\Http\Controllers\Admin\AccountController::class, 'index']) -> name('admin_account');
Route::get('/admin/help', [App\Http\Controllers\Admin\HelpController::class, 'index']) -> name('admin_help');
Route::get('/admin/docs', [App\Http\Controllers\Admin\DocsController::class, 'index']) -> name('admin_docs');
Route::get('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'index']) -> name('admin_login');
Route::get('/admin/notifications', [App\Http\Controllers\Admin\NotificationsController::class, 'index']) -> name('admin_notifications');
Route::get('/admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']) -> name('admin_category');
Route::get('/admin/settings', [App\Http\Controllers\Admin\SettingsController::class, 'index']) -> name('admin_settings');
Route::get('/admin/signup', [App\Http\Controllers\Admin\SignupController::class, 'index']) -> name('admin_signup');
Route::get('/admin/reset_password', [App\Http\Controllers\Admin\ResetPasswordController::class, 'index']) -> name('admin_reset_password');
