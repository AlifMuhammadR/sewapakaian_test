<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ClothesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Clothes::all();
        $userRole = auth()->user()->level;

        // Mapping role ke title
        $titles = [
            'admin'  => 'Admin - Sija',
            'owner'  => 'Owner - Sija',
        ];

        return view('clothes.index', [
            'title' => $titles[$userRole] ?? '',
            'menu'  => 'Clothes',
            'datas' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userRole = auth()->user()->level;

        return view('clothes.create', [
            'title' => $userRole === 'admin' ? 'Admin - Sija' : 'Owner - Sija',
            'menu' => 'Clothes',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nama_pakaian = DB::table('pakaians')
            ->where('nama_pakaian', '=', $request->nama_pakaian)
            ->value('nama_pakaian');

        if ($nama_pakaian) {
            return redirect()->route('clothes.create')->with('error', 'Clothes Name ' . $request->nama_pakaian . ' Already Exist!')->withInput();
        } else {
            $data = $request->only([
                'nama_pakaian',
                'jenis',
                'model',
                'warna',
                'ukuran',
                'bahan',
                'deskripsi',
                'stok',
                'harga_sewa'
            ]);
        }

        //     if('jenis'){
        //         return view ('clothes.create', [
        //             'title' => ['Admin - Sija', 'Owner'],
        //             'menu' => 'Payment Method',
        //             'pesan' => 'Type '
        //             . $request->jenis
        //             . ' Already Exist!',
        //             'jenis' => $request->jenis,
        //             'model' => $request->model,
        //             'warna' => $request->warna,
        //             'ukuran' => $request->ukuran,
        //             'bahan' => $request->bahan,
        //             'deskripsi' => $request->deskripsi,
        //             'stok' => $request->stok,
        //             'harga_sewa' => $request->harga_sewa
        //         ]);
        //     }
        // dd($request->all());

        // $data['stok'] = 0;
        // $data['harga_sewa'] = 0;

        if ($request->hasFile('foto1')) {
            $data['foto1'] = $request->file('foto1')->store('Pakaian');
        }
        if ($request->hasFile('foto2')) {
            $data['foto2'] = $request->file('foto2')->store('Pakaian');
        }
        if ($request->hasFile('foto3')) {
            $data['foto3'] = $request->file('foto3')->store('Pakaian');
        }


        // // Menyimpan data ke dalam database
        $simpan = Clothes::create($data);
        // // Jika penyimpanan berhasil, kembali ke halaman index dengan pesan sukses
        if ($simpan) {
            return redirect()->route('clothes')
                ->with('pesan', 'Clothes ' . $request->nama_pakaian . ' data has been successfully added!');
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
        $clothes = Clothes::find($id);
        $userRole = auth()->user()->level;
        return view('clothes.edit', data: [
            'title' => $userRole === 'admin' ? 'Admin - Sija' : 'Owner - Sija',
            'menu' => 'Clothes',
            'data' => $clothes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Memeriksa jika ada pakaian lain dengan nama yang sama
        $nama_pakaian = DB::table('pakaians')
            ->where('nama_pakaian', '=', $request->nama_pakaian)
            ->where('id', '!=', $id) // mengecualikan pakaian dengan ID saat ini
            ->value('nama_pakaian');

        if ($nama_pakaian) {
            return redirect()->route('clothes.edit', $id)->with('error', 'Clothes Name ' . $request->nama_pakaian . ' Already Exist in Database!')->withInput(); // Menyimpan data untuk ditampilkan kembali di view
        } else {
            $data = Clothes::find($id);
            $data->nama_pakaian = $request->nama_pakaian;
            $data->jenis = $request->jenis;
            $data->model = $request->model;
            $data->warna = $request->warna;
            $data->ukuran = $request->ukuran;
            $data->bahan = $request->bahan;
            $data->deskripsi = $request->deskripsi;
            $data->stok = $request->stok;
            $data->harga_sewa = $request->harga_sewa;

            // Memeriksa dan mengupdate gambar jika ada file baru yang di-upload
            $images = ['foto1', 'foto2', 'foto3'];
            foreach ($images as $image) {
                if ($request->hasFile($image)) {
                    // Hapus gambar lama jika ada
                    if ($data->$image) {
                        Storage::delete($data->$image);
                    }
                    // Simpan gambar baru dan update di database
                    $data->$image = $request->file($image)->store('Pakaian');
                }
            }

            // if ($request->file('foto1') !== null) {
            //     $data['foto1'] = $request->file('foto1')->store('Pakaian');
            //     Storage::delete($data->foto1);
            // }

            // if ($request->file('foto2') !== null) {
            //     $data['foto2'] = $request->file('foto2')->store('Pakaian');
            //     Storage::delete($data->foto2);
            // }

            // if ($request->file('foto3') !== null) {
            //     $data['foto3'] = $request->file('foto3')->store('Pakaian');
            //     Storage::delete($data->foto3);
            // }

            $data->save();

            return redirect()->route('clothes')->with('pesan', 'Clothes data ' . $request->nama_pakaian . ' has been successfully updated!');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        // if ($clothes) {
        //     // Array berisi nama kolom foto yang sesuai dengan yang digunakan dalam database
        //     $images = ['foto1', 'foto2', 'foto3'];

        //     // Hapus semua file foto yang ada di storage
        //     foreach ($images as $image) {
        //         if ($clothes->$image) {
        //             Storage::delete($clothes->$image);
        //         }
        //     }

        //     // Hapus data dari database
        //     $clothes->delete();
        // }

        // Ambil data sekali saja
        $clothes = Clothes::find($id);

        if ($clothes->foto1 !== null) Storage::delete($clothes->foto1);
        if ($clothes->foto2 !== null) Storage::delete($clothes->foto2);
        if ($clothes->foto3 !== null) Storage::delete($clothes->foto3);

        $clothes->delete();

        return redirect()->route('clothes')->with('pesan', 'Clothes data ' . $clothes->nama_pakaian . ' has been successfully deleted!');
    }
}
