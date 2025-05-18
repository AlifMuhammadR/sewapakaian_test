@extends('be.master')
@section('login')
    <!-- Sign In Start -->

    <div class="container-fluid" style="min-height: 100vh;">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="{{ route('login') }}" class="">
                            <h4 class="text-primary"><i class="fa fa-tshirt me-2"></i>SEWA PAKAIAN</h4>
                        </a>
                        <h5>Sign In</h5>
                    </div>
                    <form action="{{ route('login_karyawan_proses') }}" method="POST" id="frmLogin">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="name@example.com" value="{{ old('email') }}">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button type="button" id="btnLogin" class="btn btn-primary py-3 w-100 mb-4">Sign
                            In</button>

                        <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign In End -->
    </div>
    <div id="pesan" class="invisible">
        @isset($pesan)
            {{ $pesan }}
        @endisset
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('back-end/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('back-end/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('back-end/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('back-end/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('back-end/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('back-end/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('back-end/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('back-end/js/main.js') }}"></script>

    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>


    {{-- Tooltip --}}
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

    <script>
        const btnLogin = document.getElementById('btnLogin');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const form = document.querySelector('#frmLogin');
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
            if (email.value === '') {
                email.focus();
                swal("Invalid Data!", "Email is Required", "error");
            } else if (password.value === '') {
                password.focus();
                swal("Invalid Data!", "Password is Required", "error");
            } else {
                form.submit();
            }
        }

        body.onload = function() {
            tampil_pesan()
        }

        btnLogin.onclick = function() {
            simpan();
        };
    </script>
@endsection
