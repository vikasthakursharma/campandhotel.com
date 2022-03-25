<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\UsersController;
use App\Models\Banner;
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
Route::get('/',[HomeController::class,'index'])->name('name.home');
Route::get('/contact',[ContactController::class,'index'])->name('name.contact');
Route::get('/gallery',[GalleryController::class,'index'])->name('name.gallery');
Route::get('/about',[AboutController::class,'index'])->name('name.about');
Route::get('/testimonial',[TestimonialController::class,'index'])->name('name.testimonial');
;
