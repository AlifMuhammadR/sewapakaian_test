<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Payment_MethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('payment_method.index', [
            'title' => 'Admin - Sija',
            'menu' => 'Payment Method',
            'datas' => PaymentMethod::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payment_method.create', [
            'title' => 'Admin - Sija',
            'menu' => 'Payment Method',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment_method = DB::table('jenis_pembayarans')
            ->where('metode_pembayaran', '=', $request->metode_pembayaran)
            ->value('metode_pembayaran');

        if ($payment_method) {
            return redirect()->route('payment_method.create')->with('error', 'Payment Method Data ' . $request->metode_pembayaran . ' Already Exist!')->withInput();

        } else {
            // Mengambil hanya field 'metode_pembayaran' dari request
            $data = $request->only([
                'metode_pembayaran'
            ]);

            // Menyimpan data ke dalam database
            $simpan = PaymentMethod::create($data);

            // Jika penyimpanan berhasil, kembali ke halaman index dengan pesan sukses

            if ($simpan) {
                return redirect()->route('payment_method')
                    ->with('pesan', 'Payment Method ' . $request->metode_pembayaran . ' data has been successfully added!');
            }
        }
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
        $payment_method = PaymentMethod::find($id);
        return view('payment_method.edit', data: [
            'title' => 'Admin - Sija',
            'menu' => 'Payment Method',
            'data' => $payment_method,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payment_method = DB::table('jenis_pembayarans')
            ->where('metode_pembayaran', '=', $request->metode_pembayaran)
            ->where('id', '!=', $id) // mengecualikan pakaian dengan ID saat ini
            ->value('metode_pembayaran');

        if ($payment_method) {
            return redirect()->back()->with([
                'status' => 'duplicate',
                'error' => 'Payment Method Data ' . $request->metode_pembayaran . ' Already Exist!',
                'metode_pembayaran' => $request->metode_pembayaran,
                'data' => PaymentMethod::find($id),
            ]);
        } else {
            $data = PaymentMethod::find($id);
            $data->metode_pembayaran = $request->metode_pembayaran;
            $data->save();

            return redirect()->route('payment_method')->with('pesan', 'Payment Method data ' . $request->metode_pembayaran . ' has been successfully updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $payment_method = PaymentMethod::find($id);

        if ($payment_method) {

            // Hapus data dari database
            $payment_method->delete();

            return redirect()->route('payment_method')
                ->with('pesan', 'Payment Method data ' . $payment_method->metode_pembayaran . ' has been successfully deleted!');
        }
    }
}
