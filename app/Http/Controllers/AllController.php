<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Cart;
use App\Models\Pemanggilan;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Stringable;


class AllController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function Produk()
    {
        return view('produk', [
            'data' => Produk::get()
        ]);
    }
    public function add_cart($id)
    {
        $cart = Cart::firstOrCreate([
            'user_id' => Auth::user()->id,
            'produk_id' => $id,
        ]);

        $cart->increment('jumlah');

        return back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
    public function keranjang()
    {
        return view('keranjang', [
            'data' => Cart::where('user_id', Auth::user()->id)->get()
        ]);
    }
    public function update_cart($id, $tipe)
    {
        $cart = Cart::findOrFail($id);

        if ($tipe == -1) {
            if ($cart->jumlah == 1) {
                $cart->delete();
            } else {
                $cart->update([
                    'jumlah' => $cart->jumlah - 1
                ]);
            }
        } elseif ($tipe == 1) {
            $cart->update([
                'jumlah' => $cart->jumlah + 1
            ]);
        }

        return back()->with('success', 'Cart berhasil diupdate');
    }
    public function checkout(Request $request)
    {
        // Ambil data user yang sedang login
        $user = Auth::user();

        // Buat transaksi baru 
        $transaksi = new Transaksi();
        $transaksi->user_id = $user->id;
        $transaksi->total_harga = 0; // Masukkan total harga belanjaan
        $transaksi->save();

        // Looping data cart
        $cartIds = $request->input('cart');
        $cartItems = Cart::whereIn('id', $cartIds)->get();
        foreach ($cartItems as $cart) {
            // Buat detail transaksi baru
            $detailTransaksi = new TransaksiDetail();
            $detailTransaksi->transaksi_id = $transaksi->id;
            $detailTransaksi->produk_id = $cart->produk_id;
            $detailTransaksi->jumlah = $cart->jumlah;
            if ($cart->produk->harga_promo != 0) {
                $detailTransaksi->harga = $cart->produk->harga_promo;
            } else {
                $detailTransaksi->harga = $cart->produk->harga;
            }
            $detailTransaksi->save();

            // Tambahkan harga produk ke total harga transaksi
            $transaksi->total_harga += $detailTransaksi->harga * $cart->jumlah;

            // Hapus data cart
            $cart->delete();
        }
        // Update total harga transaksi
        $transaksi->save();

        // Redirect ke halaman sukses checkout
        return redirect('/produk')->with('success', 'Transaksi Sedang Di Proses');
        }
        public function admin_produk()
        {
            return view('admin_produk', [
                "data" => Produk::get()
            ]);
        }
        public function produk_tambah(Request $request)
        {
            $produk = new Produk();
            $produk->nama = $request->nama;
            $produk->harga = $request->harga;
    
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $filename = time() . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('images'), $filename);
                $produk->gambar = $filename;
            }
    
            if ($request->promo) {
                $produk->harga_promo = $request->promo;
                $produk->tanggal_promo_berakhir = $request->tanggal_promo_berakhir;
            }
    
            $produk->save();
    
            return redirect()->route('produk-read')->with('success', 'Produk berhasil ditambahkan.');
        }
        public function produk_update(Request $request)
        {
            $produk = Produk::findOrFail($request->id);
    
            $produk->nama = $request->nama;
            $produk->harga = $request->harga;
    
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $filename = time() . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('images'), $filename);
                $produk->gambar = $filename;
            }
    
            if ($request->harga_promo != 0) {
                $produk->harga_promo = $request->harga_promo;
                $produk->tanggal_promo_berakhir = $request->tanggal_promo_berakhir;
            } else {
                $produk->harga_promo = 0;
                $produk->tanggal_promo_berakhir = null;
            }
    
            $produk->save();
    
            return redirect()->route('produk-read')->with('success', 'Produk berhasil diupdate.');
        }


        
    }
    

        