<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pelayanan', function () {
    return view('pelayanan');
});

Route::get('/pemanggilan', function () {
    return view('pemanggilan');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/about', function () {
    return view('about');
});
// untuk menampilkan view help
Route::get('/help', function () {
    return view('help');
});

// yang di atas require maka akan di akses di dalam login
require __DIR__ . '/auth.php';

// Di letakkan di bawah require karena di akses di luar login
Route::get('/', function () {
    return view('index');
});
