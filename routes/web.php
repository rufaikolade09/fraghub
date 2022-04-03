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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/item-page', [App\Http\Controllers\WelcomeController::class, 'item_page'])->name('item-page');

Route::get('/items', [App\Http\Controllers\WelcomeController::class, 'items'])->name('items');

Route::get('/payment', [App\Http\Controllers\WelcomeController::class, 'payment'])->name('payment');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\PageController::class, 'admin'])->name('admin');

Route::get('/logout-admin', [App\Http\Controllers\PageController::class, 'logout_admin'])->name('logout-admin');


Route::get('/admin/users', [App\Http\Controllers\PageController::class, 'admin_users'])->name('admin-users');

Route::get('/admin/items', [App\Http\Controllers\PageController::class, 'admin_items'])->name('admin-items');

Route::get('/admin/items/new', [App\Http\Controllers\PageController::class, 'admin_items_new'])->name('admin-items-new');

Route::get('/admin/bookings', [App\Http\Controllers\PageController::class, 'admin_bookings'])->name('admin-bookings');


Route::post('/post-item', [App\Http\Controllers\PageController::class, 'post_item'])->name('post-item');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('index');

Route::post('/post-booking', [App\Http\Controllers\WelcomeController::class, 'post_booking'])->name('post-booking');

Route::get('/payment/thank-you', [App\Http\Controllers\WelcomeController::class, 'thank_you'])->name('thank-you');

Route::get('/search-item', [App\Http\Controllers\WelcomeController::class, 'search_item'])->name('search-item');

Route::get('/about', [App\Http\Controllers\WelcomeController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\WelcomeController::class, 'contact'])->name('contact');



