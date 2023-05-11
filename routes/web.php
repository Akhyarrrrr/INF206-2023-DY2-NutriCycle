<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AllController;
use Illuminate\Support\Facades\Auth;
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

// untuk menampilkan dashboard dan memverifikasi login beserta mengambil nama user
Route::get('/dashboard', function () {
    if (Auth::user()->role == 1) {
        return redirect()->route('produk-read');
    } else {
        return view('dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

//untuk menampilkan ke arah page profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //untuk menampilkan ke arah page produk
    //dengan menggunakan function produk di dalam allcontrollers
    Route::get('/produk', [AllController::class, 'produk']);

    //untuk menampilkan ke arah page keranjang
    Route::get('/keranjang', [AllController::class, 'keranjang']);
    Route::get('/add_cart/{id}', [AllController::class, 'add_cart'])->name('add_cart');

    Route::get('/update_cart/{id}/{tipe}', [AllController::class, 'update_cart'])->name('update_cart');
    Route::post('/checkout', [AllController::class, 'checkout'])->name('checkout');


    //untuk menampilkan ke arah page pelayanan
    Route::get('/pelayanan', function () {
        return view('pelayanan');
    });

    // untuk menampilkan kearah page pemanggilan
    Route::get('/pemanggilan', function () {
        return view('pemanggilan');
    });

    //mengirim data dengan nama function pemanggilan tambah dari halaman pemanggilan
    Route::post('/pemangilan_tambah', [AllController::class, 'pemanggilan_tambah'])->name('pemanggilan_tambah');

    //untuk mengarahkan ke page page yang ada pada admin
    Route::middleware('admin')->group(function () {
        Route::get('/admin_produk', [AllController::class, 'admin_produk'])->name('produk-read');
        Route::post('/produk_tambah', [AllController::class, 'produk_tambah'])->name('produk-tambah');
        Route::post('/produk_update', [AllController::class, 'produk_update'])->name('produk-update');
        Route::get('/produk_delete/{id}', [AllController::class, 'produk_delete'])->name('produk-delete');

        Route::get('/admin_pemanggilan', [AllController::class, 'admin_pemanggilan'])->name('pemanggilan-read');
        Route::get('/pemanggilan_selesai/{id}', [AllController::class, 'pemanggilan_selesai'])->name('pemanggilan-selesai');
        Route::get('/pemanggilan_delete/{id}', [AllController::class, 'pemanggilan_delete'])->name('pemanggilan-delete');

        Route::get('/transaksi', [AllController::class, 'transaksi'])->name('transaksi');
        Route::get('/transaksi_selesai/{id}', [AllController::class, 'transaksi_selesai'])->name('transaksi-selesai');
    });

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

//untuk menampilkan ke arah page about
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
