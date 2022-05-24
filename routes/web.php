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

//Admin
Route::get('/admin', function () {
    return view('admin_panel.index');
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
Route::get('/AdminPanel', [AdminHomeController::class, 'index']) -> name('admin');

//**********************ADMIN CATEGORY ROUTES***********************    */

Route::get('/AdminPanel/category', [App\Http\Controllers\AdminPanel\CategoryController::class, 'index']) -> name('admin_category');
Route::get('/AdminPanel/category/create', [App\Http\Controllers\AdminPanel\CategoryController::class, 'create']) -> name('admin_category_create');