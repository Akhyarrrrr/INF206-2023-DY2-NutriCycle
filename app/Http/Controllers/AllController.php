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


}