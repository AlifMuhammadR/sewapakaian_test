@extends('be.master')
@section('navbar')
    @include('be.navbar')
@endsection
@section('sidebar')
    @include('be.sidebar')
@endsection
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="d-flex align-items-center justify-content-center">
            <h1 class="mb-4 text-center">COURIER PAGE IS UNDER CONSTRUCTION!</h1>
        </div>
    </div>

    <div id="pesan" class="invisible">
        @isset($pesan)
            {{ $pesan }}
        @endisset
    </div>

    <script>
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

        body.onload = function() {
            tampil_pesan()
        }

        btnSimpan.onclick = function() {
            simpan()
        }
    </script>
@endsection
