<?php

namespace App\Http\Controllers;

use App\Models\Keranjangs;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $data = $request->only([
            'id_pelanggan',
            'id_pakaian',
            'jumlah_order',
            'subtotal'
        ]);

        Keranjangs::create($data);

        return redirect()->route('shoping_cart')
            ->with('title', 'Shopping Cart');
        // ->with('metode_pembayaran', $request->metode_pembayaran);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
