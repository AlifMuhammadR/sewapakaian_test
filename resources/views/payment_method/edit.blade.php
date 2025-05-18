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
                            Payment Method:.edit
                        </div>
                    </div>
                    <form action="{{ isset($data) ? route('payment_method.update', $data->id) : '' }}"" method="POST"
                        id="frmPaymentMethod">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="payment_method" class="form-label">Payment Method</label>
                            <input class="form-control" type="text" aria-label="default input example"
                                value="{{ old('metode_pembayaran', $data->metode_pembayaran) }}" maxlength="30"
                                id="payment_method" name="metode_pembayaran">
                            {{-- <select class="form-select mb-3" aria-label="Default select example" id="payment_method"
                                name="metode_pembayaran">
                                <option selected>Open this select menu</option>
                                <option value="COD">COD</option>
                                <option value="TF">Tranfer</option>
                                <option value="OUTLET">Outlet</option>
                                <option value="EWALLET">E-Wallet</option>
                                <option value="CARD">Credit Card</option>
                            </select> --}}
                            <div id="payment_methodHelp" class="form-text text-warning">Payment Method
                                Must be filled in and maximal 30 characters
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="{{ route('payment_method') }}" class="btn btn-secondary">
                                <i class="fas fa-window-close me-2"></i>Cancel
                            </a>
                            <button type="button" class="btn btn-primary" id="save">
                                <i class="fas fa-save me-2"></i>Update This Payment Method </button>
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
        const payment = document.getElementById('payment_method');
        const from = document.getElementById('frmPaymentMethod');
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
            if (payment.value === '') {
                payment.focus()
                swal("Invalid Data!", "You must fill the payment method", "error");
            } else {
                // swal("Berhasil!", "Data berhasil di simpan!", "success");
                from.submit();
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
