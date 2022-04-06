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
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\TentController;
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
//---------- site routes start ---------------------------//
Route::get('/',[HomeController::class,'index'])->name('frontend.home');
Route::get('/contact-us',[ContactController::class,'index'])->name('frontend.contact');
Route::get('/gallery',[GalleryController::class,'index'])->name('frontend.gallery');
Route::get('/about',[AboutController::class,'index'])->name('frontend.about');
Route::get('/testimonial',[TestimonialController::class,'index'])->name('frontend.testinmonial');
Route::get('/login',[LoginController::class,'index'])->name('frontend.login');
Route::get('/register',[RegisterController::class,'index'])->name('frontend.register');
Route::get('/tent',[TentController::class,'index'])->name('tent');
Route::get('/tent-details',[TentController::class,'single_tent_details'])->name('tent.details');
Route::get('/faq',[TentController::class,'faq_page'])->name('frontend.faq');

Route::get('/user/dashboard', [LoginController::class, 'UserDashboard'])->name('user.dashboard');

Route::post('/user/auth/login', [LoginController::class, 'login'])->name('user.loginfront');

Route::get('user/auth/logout', [LoginController::class, 'logout'])->name('user.logout');

Route::post('/user/auth/register', [RegisterController::class, 'register'])->name('frontend.register');

//----------------- site routes end -----------------------------//

//===============================================================//


//------------------ admin routes start ----------------------------//
// ------login logout register routes ------------------------------------//
Route::get('/admin', [AuthController::class, 'index'])->name('name.login')->middleware('active.login');
Route::post('/admin/auth/login', [AuthController::class, 'login'])->name('name.login');
Route::get('/admin/auth/logout', [AuthController::class, 'logout'])->name('backend.users');

Route::get('/admin/auth/register', [AuthController::class, 'register_user'])->name('backend.register');

Route::get('/markAsReadNotification/{id}', [AuthController::class, 'notificationMarkAsRead'])->name('markAsReadNotification');

Route::post('/admin/auth/register', [AuthController::class, 'register'])->name('backend.register');



// no access
Route::get('/not-access', function () {

    return view('backend.layouts.errors-404');
});

Route::middleware(['active.login'])->group(function () {
    // ----- no access without login -----------//
Route::middleware(['admin.guard'])->group(function () {
    // home page
    Route::get('/admin/home', [BackendController::class, 'index'])->name('admin.home');

    // ----------- banner view routes ---------------------------------------------//
    Route::get('/admin/banner/', [BannerController::class, 'index'])->name('name.index');

    // --------------------- banner add, edit and delete routes ----------------------------------//
    Route::get('/admin/banner/create', [BannerController::class, 'add_banner'])->name('name.create');
    Route::post('/admin/banner/create', [BannerController::class, 'store'])->name('name.create');
    Route::get('/admin/banner/edit/{id}', [BannerController::class, 'edit'])->name('name.edit');
    Route::get('/admin/banner/activate/{id}', [BannerController::class, 'activate']);

    Route::get('/admin/banner/update/{id}', [BannerController::class, 'update'])->name('name.update');
    Route::post('/admin/banner/update/{id}', [BannerController::class, 'update'])->name('name.update');
    Route::get('/admin/banner/delete/{id}', [BannerController::class, 'delete'])->name('name.delete');

    // ------------- delte image ---------------------//
    Route::get('/admin/delete-image/{id}/{image}', [BannerController::class, 'deleteImage']);

    //------------- admin user profile ----------------------//
    Route::get('/admin/profile', [ProfileController::class, 'index'])->name('admin.profile');

    // ------------ users -----------------------------//
    Route::get('/admin/users', [UsersController::class, 'index'])->name('backend.users');

    // -------------------- gallery ----------------------//
    Route::get('/admin/gallery', [BannerController::class, 'imageGallery']);
});
//------------------ admin routes end -----------------------------//

});


