<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ContactoController;


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

    Route::get('/', [AdminController::class, 'dashboard'])->name('home')->middleware('auth');


	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/admin', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', [AdminController::class, 'dashboard'])->name('home');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('home.dashboard');

	Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::resource('noticias', NoticiasController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('productos', ProductoController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('contacto', ContactoController::class);

    Route::resource('users', UserProfileController::class);

    Route::get('/users/destroy/{id}', [UserProfileController::class, 'destroy'])->name('users.destroy');

    Route::get('/media/producto/portada', [ProductoController::class, 'portada'])->name('media.product.portada');

    Route::get('/media/destroy/{id}', [MediaController::class, 'destroy'])->name('media.destroy');

});


