<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Keranjangs; // Sesuaikan dengan model keranjang
use Illuminate\Support\Facades\DB;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share data keranjang ke semua views yang mengandung fe.cart
        View::composer('fe.cart', function ($view) {
            // Ambil data keranjang dengan id_pelanggan = 1
            $keranjang = DB::table('vwkeranjang')->where('id_pelanggan', 1)->get();
            $total = $keranjang->sum('subtotal');

            // Kirim data ke view
            $view->with('vwkeranjang', $keranjang);
            $view->with('total', $total);
        });
    }

    public function register()
    {
        //
    }
}
