<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothes;
use App\Models\PaymentMethod;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // // Mengambil data berdasarkan kebutuhan: 1 record saja untuk halaman about
        // $clothes = Clothes::find(1);

        // // Semua data atau subset untuk halaman cart jika diperlukan
        // $allClothes = Clothes::all(); // atau sesuaikan dengan kondisi tertentu jika dibutuhkan

        // $threeClothes = Clothes::take(3)->get(); // Mengambil hanya 3 data dari tabel Clothes

        // // Mengambil metode pembayaran (jika perlu)
        // $paymentMethods = PaymentMethod::all();

        // return view('blog.index', compact('clothes', 'allClothes', 'threeClothes', 'paymentMethods'), [
        //     'title' => 'Blog',
        //     'clothes' => $clothes,
        //     'paymentMethods' => $paymentMethods,
        // ]);

        return view('blog.index', [
            'title' => 'Blog',
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
