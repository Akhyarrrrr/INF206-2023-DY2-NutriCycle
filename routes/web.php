<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('/redirects',[HomeController::class,"index"]);

// untuk menampilkan dashboard dan memverifikasi login beserta mengambil nama user
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//untuk menampilkan ke arah page profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//untuk masuk ke dalam register
Route::get('/signup', function () {
    return view('signup');
});

//untuk masuk kedalam login
Route::get('/login', function () {
    return view('login');
});

//untuk menampilkan ke page home
Route::get('/home', function () {
    return view('home');
});
//untuk menampilkan ke arah page pelayanan
Route::get('/pelayanan', function () {
    return view('pelayanan');
});

// untuk menampilkan kearah page pemanggilan
Route::get('/pemanggilan', function () {
    return view('pemanggilan');
});

//untuk menampilkan ke arah page produk
Route::get('/produk', function () {
    return view('produk');
});

//untuk menampilkan ke arah page keranjang
Route::get('/keranjang', function () {
    return view('keranjang');
});

//untuk menampilkan ke arah page about
Route::get('/about', function () {
    return view('about');
});
// untuk menampilkan view help
Route::get('/help', function () {
    return view('help');
});

Route::get('/order', function () {
    return view('/petugas/order');
});

Route::get('/pickup', function () {
    return view('petugas/pickup');
});

// yang di atas require maka akan di akses di dalam login
require __DIR__ . '/auth.php';

// Di letakkan di bawah require karena di akses di luar login
Route::get('/', function () {
    return view('index');
});
