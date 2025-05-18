<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothes;
use App\Models\Keranjangs;
use App\Models\PaymentMethod;
use App\Models\Pelanggans;
use App\Models\Ongkirs;
use Illuminate\Support\Facades\DB;

class Shoping_CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // // Ambil semua data pakaian (atau filter sesuai kebutuhan)
        // $allClothes = Clothes::all(); // Mengambil semua data

        // // Mengambil metode pembayaran (jika diperlukan)
        // $paymentMethods = PaymentMethod::all();

        // return view('shoping-cart.index', compact('allClothes', 'paymentMethods'), [
        //     'title' => 'Shoping Cart',
        //     'clothes' => $allClothes, // Pastikan variabel ini sesuai jika Anda butuh menampilkannya di bagian lain
        //     'paymentMethods' => $paymentMethods,
        // ]);
        return view('shoping_cart.index', [
            'title' => 'Shoping Cart',
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cari_pakaian = DB::table('keranjangs')->where('id_pakaian', $request->id_pakaian)->value('id_pakaian');

        if ($cari_pakaian) {
            $cart = DB::table('vwkeranjang')->where('id_pelanggan', $request->id_pelanggan)->get();
            $total = $cart->sum('subtotal');
            return view('shoping_cart.index', [
                'title' => 'Shopping Cart',
                'datas' => $cart,
                'total' => $total,
                'pelanggan' => Pelanggans::find(1),
                'ongkir' => Ongkirs::find(1),
            ]);
        } else {
            $data = $request->only([
                'id_pelanggan',
                'id_pakaian',
                'jumlah_order',
                'subtotal'
            ]);
            Keranjangs::create($data);
            $cart = DB::table('vwkeranjang')->where('id_pelanggan', $request->id_pelanggan)->get();
            $total = $cart->sum('subtotal');
            return view('shoping_cart.index', [
                'title' => 'Shopping Cart',
                'datas' => $cart,
                'total' => $total,
                'pelanggan' => Pelanggans::find(1),
                'ongkir' => Ongkirs::find(1),
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cart = DB::table('vwkeranjang')->where('id_pelanggan', $id)->get();
        $total = $cart->sum('subtotal');
        return view('shoping_cart.index', [
            'title' => 'Shopping Cart',
            'datas' => $cart,
            'total' => $total,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
