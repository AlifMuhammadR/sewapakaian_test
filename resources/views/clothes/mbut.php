@extends('be.master')
@section('sidebar')
@include('be.sidebar')
@endsection
@section('navbar')
@include('be.navbar')
@endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="row mb-5">
                    <div class="col-auto me-auto mb-4 h3 text-black-50">Clothes::.create</div>
                </div>

                <form action="{{ route('clothes.store') }}" method="POST" id="frmClothes" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Type</label>
                        <input class="form-control" name="jenis" id="jenis" maxlength="100" type="text"
                            aria-label="default input example"
                            value="@isset($jenis){{ $jenis }}@endisset">
                        <div id="clothesHelp" class="form-text text-warning">Clothes <b class="text-primary">Type</b>
                            Must be filled in and maximal 100 characters
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input class="form-control" name="model" id="model" maxlength="100" type="text"
                            aria-label="default input example"
                            value="@isset($model){{ $model }}@endisset">
                        <div id="clothesHelp" class="form-text text-warning">Clothes <b class="text-primary">Model</b>
                            Must be filled in and maximal 100 characters
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="warna" class="form-label">Colour</label>
                        <input class="form-control" name="warna" id="warna" maxlength="50" type="text"
                            aria-label="default input example"
                            value="@isset($warna){{ $warna }}@endisset">
                        <div id="clothesHelp" class="form-text text-warning">Clothes <b class="text-primary">Colour</b>
                            Must be filled in and maximal 50 characters
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="ukuran" class="form-label">Ukuran</label>
                        <select class="form-select" id="ukuran" name="ukuran" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="XL">XL</option>
                            <option value="2XL">2XL</option>
                            <option value="3XL">3XL</option>
                            <option value="4XL">4XL</option>
                            <option value="5XL">5XL</option>
                            <option value="6XL">6XL</option>
                            <option value="All Size">All Size</option>
                        </select>
                        <div id="clothesHelp" class="form-text text-warning">Clothes <b class="text-primary">Size</b>
                            Must be Selected
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="bahan" class="form-label">Material</label>
                        <input class="form-control" name="bahan" id="bahan" maxlength="50" type="text"
                            aria-label="default input example"
                            value="@isset($bahan){{ $bahan }}@endisset">
                        <div id="clothesHelp" class="form-text text-warning">Clothes <b class="text-primary">Material</b>
                            Must be filled in and maximal 50 characters
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="deskripsi" id="description" rows="7"></textarea>
                        <div id="clothesHelp" class="form-text text-warning">Clothes <b
                                class="text-primary">Description</b>
                            Must be filled
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto1" class="form-label">1<sup>st</sup> Image</label>
                        <input class="form-control" name="foto1" type="file" id="foto1">
                        <div id="clothesHelp" class="form-text text-warning">
                            Clothes <b class="text-primary">Image 1<sup>st</sup></b> Must be filled
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto2" class="form-label">2<sup>nd</sup> Image</label>
                        <input class="form-control" name="foto2" type="file" id="foto2">
                        <div id="clothesHelp" class="form-text text-warning">
                            Clothes <b class="text-primary">Image 2<sup>nd</sup></b> Must be filled
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto3" class="form-label">3<sup>rd</sup> Image</label>
                        <input class="form-control" name="foto3" type="file" id="foto3">
                        <div id="clothesHelp" class="form-text text-warning">
                            Clothes <b class="text-primary">Image 3<sup>rd</sup></b> Must be filled
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stock</label>
                        <input class="form-control text-end" name="stok" id="stok" type="text"
                            aria-label="default input example"
                            value="@isset($stok){{ $stok }}@endisset" placeholder="0">
                        <div id="clothesHelp" class="form-text text-warning">Clothes <b class="text-primary">Stock</b>
                            Must be filled in Minimal 0
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="harga_sewa" class="form-label">Rental's Price</label>
                        <input class="form-control text-end" name="harga_sewa" id="harga_sewa" type="text"
                            aria-label="default input example"
                            value="@isset($harga_sewa){{ $harga_sewa }}@endisset" placeholder="0">
                        <div id="clothesHelp" class="form-text text-warning">Clothes <b
                                class="text-primary">Rental's Price</b>
                            Must be filled in Minimal 0
                        </div>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('clothes') }}" class="btn btn-secondary">
                            <i class="fas fa-window-close me-2"></i>Cancel</a>
                        <button type="button" class="btn btn-primary" id="save"><i class="fas fa-save me-2">
                            </i>Save New Clothes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<!--                    <div class="mb-3">
                            <label for="stok" class="form-label">Stock</label>
                            <input class="form-control" type="number" aria-label="default input example"
                                value="@isset($stok){{ $stok }}@endisset" id="stok"
                                name="stok">
                            <div id="stokHelp" class="form-text text-warning">Clothes <b class="text-primary">Stock</b>
                                Must be filled
                            </div>
                        </div>

                        {{-- Harga_Sewa Pakaian --}}
                        <div class="mb-3">
                            <label for="harga_sewa" class="form-label">Rental's Price</label>
                            <input class="form-control" type="number" aria-label="default input example"
                                value="@isset($harga){{ $harga }}@endisset" id="harga_sewa"
                                name="harga_sewa">
                            <div id="harga_sewaHelp" class="form-text text-warning">Clothes <b
                                    class="text-primary">Rental's Price</b>
                                Must be filled
                            </div>
                        </div> -->


<!-- modal 1 2 3 -->
@if (!empty($data['foto1']))
<div class="modal fade" id="foto1_{{ $data->id }}" tabindex="-1" aria-labelledby="foto1_{{ $data->id }}"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="foto1_{{ $data->id }}_label">
                    @if (strlen($data['nama_pakaian']) > 40)
                    {{ substr($data['nama_pakaian'], 0, 40) . '...' }}
                    @else
                    {{ $data['nama_pakaian'] }}
                    @endif
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('storage/' . $data['foto1']) }}" alt="Foto Produk 1" class="w-100">
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
@endif

@if (!empty($data['foto2']))
<div class="modal fade" id="foto2_{{ $data->id }}" tabindex="-1" aria-labelledby="foto2_{{ $data->id }}"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="foto2_{{ $data->id }}_label">
                    @if (strlen($data['nama_pakaian']) > 40)
                    {{ substr($data['nama_pakaian'], 0, 40) . '...' }}
                    @else
                    {{ $data['nama_pakaian'] }}
                    @endif
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('storage/' . $data['foto2']) }}" alt="Foto Produk 2" class="w-100">
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
@endif

@if (!empty($data['foto3']))
<div class="modal fade" id="foto3_{{ $data->id }}" tabindex="-1" aria-labelledby="foto3_{{ $data->id }}"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="foto3_{{ $data->id }}_label">
                    @if (strlen($data['nama_pakaian']) > 40)
                    {{ substr($data['nama_pakaian'], 0, 40) . '...' }}
                    @else
                    {{ $data['nama_pakaian'] }}
                    @endif
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('storage/' . $data['foto3']) }}" alt="Foto Produk 3" class="w-100">
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
@endif
<!-- modal tutup -->