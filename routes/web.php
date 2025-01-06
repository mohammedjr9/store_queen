<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserType;
use App\Http\Controllers\Dashboard\dashboard;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\about;
use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Dashboard\VideoController;
use App\Http\Middleware\RedirectIfNotAuthenticated;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\work_team;
use App\Http\Controllers\Dashboard\our_product;
use App\Http\Controllers\Front\ProductDetailsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// */
//for login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/signup', [LoginController::class, 'signup'])->name('signup');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/submit', [LoginController::class, 'login'])->name('login.check');
Route::post('/signupCheck', [LoginController::class, 'signupCheck'])->name('signup.check');



Route::prefix('')->middleware([ RedirectIfNotAuthenticated::class, 'auth', CheckUserType::class])->group(function () {
    Route::get('/dashboard', [dashboard::class, 'index'])->name('home');
    Route::resource('/about', AboutController::class);
    Route::resource('/workTeam', work_team::class);
    Route::resource('/OurProduct', our_product::class);

    Route::resource('/products', ProductController::class);
});

//for testing

Route::get('/queen', function () {
    return view('Front.index');
});
Route::get('/pd', function () {
    return view('Front.product_detail');
});




Route::prefix('/')->as('Home.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/ProductDetails/{product_id}', [ProductDetailsController::class, 'index'])->name('ProductDetails'); // تغيير هنا
});




Route::get('/upload-video', [VideoController::class, 'create'])->name('video');
Route::post('/upload-video', [VideoController::class, 'store'])->name('video.upload');
