@extends('be.master')
@section('sidebar')
    @include('be.sidebar')
@endsection
@section('navbar')
    @include('be.navbar')
@endsection
@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="row mb-3">
                        <div class="col-auto me-auto mb-0 h4">
                            Clothes:.create
                        </div>
                    </div>
                    <form action="{{ route('clothes.store') }}" method="POST" id="frmClothes" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_pakaian" class="form-label">Clothes Name</label>
                            <input class="form-control" name="nama_pakaian" id="nama_pakaian" maxlength="100" type="text"
                                aria-label="default input example" value="{{ old('nama_pakaian') }}">
                            <div id="clothesHelp" class="form-text text-warning">Clothes <b class="text-primary">Name</b>
                                Must be filled in and maximal 100 characters
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Type</label>
                            <input class="form-control" name="jenis" id="jenis" maxlength="100" type="text"
                                aria-label="default input example" value="{{ old('jenis') }}">
                            <div id="clothesHelp" class="form-text text-warning">Clothes <b class="text-primary">Type</b>
                                Must be filled in and maximal 100 characters
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
                            <input class="form-control" name="model" id="model" maxlength="100" type="text"
                                aria-label="default input example" value="{{ old('model') }}">
                            <div id="clothesHelp" class="form-text text-warning">Clothes <b class="text-primary">Model</b>
                                Must be filled in and maximal 100 characters
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="warna" class="form-label">Colour</label>
                            <input class="form-control" name="warna" id="warna" maxlength="50" type="text"
                                aria-label="default input example" value="{{ old('warna') }}">
                            <div id="clothesHelp" class="form-text text-warning">Clothes <b class="text-primary">Colour</b>
                                Must be filled in and maximal 50 characters
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="ukuran" class="form-label">Size</label>
                            <select class="form-select" id="ukuran" name="ukuran" aria-label="Default select example">
                                    <option selected>Select Clothes Size</option>
                                    <option value="S" @if (old('ukuran') === 'S') selected @endif>S</option>
                                    <option value="M" @if (old('ukuran') === 'M') selected @endif>M</option>
                                    <option value="L" @if (old('ukuran') === 'L') selected @endif>L</option>
                                    <option value="XL" @if (old('ukuran') === 'XL') selected @endif>XL</option>
                                    <option value="2XL" @if (old('ukuran') === '2XL') selected @endif>2XL</option>
                                    <option value="3XL" @if (old('ukuran') === '3XL') selected @endif>3XL</option>
                                    <option value="4XL" @if (old('ukuran') === '4XL') selected @endif>4XL</option>
                                    <option value="5XL" @if (old('ukuran') === '5XL') selected @endif>5XL</option>
                                    <option value="6XL" @if (old('ukuran') === '6XL') selected @endif>6XL</option>
                                    <option value="All Size" @if (old('ukuran') === 'All Size') selected @endif>All Size</option>
                            </select>
                            <div id="clothesHelp" class="form-text text-warning">Clothes <b class="text-primary">Size</b>
                                Must be Selected
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="bahan" class="form-label">Material</label>
                            <input class="form-control" name="bahan" id="bahan" maxlength="50" type="text"
                                aria-label="default input example" value="{{ old('bahan') }}">
                            <div id="clothesHelp" class="form-text text-warning">Clothes <b
                                    class="text-primary">Material</b>
                                Must be filled in and maximal 50 characters
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Description</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="7">{{ old('deskripsi') }}</textarea>
                            <div id="clothesHelp" class="form-text text-warning">Clothes <b
                                    class="text-primary">Description</b>
                                Must be filled
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="foto1" class="form-label">1<sup>st</sup> Image</label>
                            <input class="form-control" name="foto1" type="file" id="foto1"
                                value="{{ old('foto1') }}">
                            <div id="clothesHelp" class="form-text text-warning">
                                Clothes <b class="text-primary">Image 1<sup>st</sup></b> Must be filled
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="foto2" class="form-label">2<sup>nd</sup> Image</label>
                            <input class="form-control" name="foto2" type="file" id="foto2"
                                value="{{ old('foto2') }}">
                            <div id="clothesHelp" class="form-text text-warning">
                                Clothes <b class="text-primary">Image 2<sup>nd</sup></b> Must be filled
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="foto3" class="form-label">3<sup>rd</sup> Image</label>
                            <input class="form-control" name="foto3" type="file" id="foto3"
                                value="{{ old('foto3') }}">
                            <div id="clothesHelp" class="form-text text-warning">
                                Clothes <b class="text-primary">Image 3<sup>rd</sup></b> Must be filled
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="stok" class="form-label">Stock</label>
                            <input class="form-control text-end" name="stok" id="stok" type="number"
                                aria-label="default input example" value="{{ old('stok') ?? 0 }}">
                            <div id="clothesHelp" class="form-text text-warning">Clothes <b
                                    class="text-primary">Stock</b>
                                Must be filled in Minimal 0
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="harga_sewa" class="form-label">Rental's Price</label>
                            <input class="form-control text-end" name="harga_sewa" id="harga_sewa" type="number"
                                aria-label="default input example" value="{{ old('harga_sewa') ?? 0 }}">
                            <div id="clothesHelp" class="form-text text-warning">
                                Clothes <b class="text-primary">Rental's Price</b> Must be filled in Minimal 0
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
    <!-- Form End -->

    {{-- <div id="status" class="invisible">
        @isset($status)
            {{ $status }}
        @endisset
    </div> --}}
    <div id="pesan" class="invisible">
        @isset($pesan)
            {{ $pesan }}
        @endisset
    </div>

    <script>
        const btnSimpan = document.getElementById('save');
        const nama_pakaian = document.getElementById('nama_pakaian');
        const jenis = document.getElementById('jenis');
        const model = document.getElementById('model');
        const warna = document.getElementById('warna');
        const ukuran = document.getElementById('ukuran');
        const bahan = document.getElementById('bahan');
        const stok = document.getElementById('stok');
        const harga_sewa = document.getElementById('harga_sewa');
        const deskripsi = document.getElementById('deskripsi');
        const form = document.getElementById('frmClothes');
        // const status = document.getElementById('status');
        const pesan = document.getElementById('pesan');
        const body = document.getElementById('body');

        function tampil_pesan() {
            let pesanSuccess = "{{ session('pesan') }}";
            let pesanError = "{{ session('error') }}";

            if (pesanSuccess.trim() !== '') {
                swal('Good Job!', pesanSuccess.trim(), 'success');
            } else if (pesanError.trim() !== '') {
                swal('Error', pesanError.trim(), 'error');
            }
        }

        function simpan() {
            if (nama_pakaian.value === '') {
                nama_pakaian.focus();
                swal("Invalid Data!", "You must fill the Clothes Name", "error");
            } else if (jenis.value === '') {
                jenis.focus();
                swal("Invalid Data!", "You must fill the Clothes Type", "error");
            } else if (model.value === '') {
                model.focus();
                swal("Invalid Data!", "You must fill the Clothes Model", "error");
            } else if (warna.value === '') {
                warna.focus();
                swal("Invalid Data!", "You must fill the Clothes Color", "error");
            } else if (ukuran.value === 'Select Clothes Size') {
                ukuran.focus();
                swal("Invalid Data!", "You must select the Clothes Size", "error");
            } else if (bahan.value === '') {
                bahan.focus();
                swal("Invalid Data!", "You must fill the Clothes Material", "error");
            } else if (deskripsi.value === '') {
                deskripsi.focus();
                swal("Invalid Data!", "You must fill the Clothes Description", "error");
            } else if (stok.value === '') {
                stok.focus();
                swal("Invalid Data!", "You must fill the Clothes Stock", "error");
            } else if (harga_sewa.value === '') {
                harga_sewa.focus();
                swal("Invalid Data!", "You must fill the Clothes Rental's Price", "error");
            } else {
                form.submit();
            }
        }

        stok.onfocus = function() {
            if (stok.value === '0') stok.value = '';
        }
        stok.onblur = function() {
            if (stok.value === '') stok.value = '0';
        }

        stok.onkeydown = function() {
            angka(event);
        }

        harga_sewa.onfocus = function() {
            if (harga_sewa.value === '0') harga_sewa.value = '';
        }
        harga_sewa.onblur = function() {
            if (harga_sewa.value === '') harga_sewa.value = '0';
        }

        harga_sewa.onkeydown = function() {
            angka(event);
        }

        body.onload = function() {
            tampil_pesan();
        }

        btnSimpan.onclick = function() {
            simpan();
        }
    </script>
@endsection
