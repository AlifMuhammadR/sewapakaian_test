<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('back-end/img/sija.png') }}" rel="icon" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('back-end/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back-end/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('back-end/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('back-end/css/style.css') }}" rel="stylesheet">

    {{-- Template Sweet Alert --}}
    <link href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" rel="stylesheet">

    <script>
        function angka(e) {
            let keycode = e.keyCode ? e.keyCode : e.which
            if (!(keycode > 47 && keycode < 58)) || (keycode == 8) || (keycode == 190) || (keycode == 188) {
                event.preventDefault();
            }
        }
    </script>

    {{-- <style>
        .cur-pointer {
            cursor: pointer;
        }
    </style> --}}
</head>

<body id="body">
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        @yield('sidebar')
        @yield('login')
        <!-- Content Start -->
        @if ($title !== 'Login')
            <div class="content">
                @yield('navbar')
                @yield('content')
                <!-- Footer Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="bg-light rounded-top p-4">
                        <div class="row">
                            <div class="col-12 col-sm-6 text-center text-sm-start">
                                &copy; <a href="https://www.instagram.com/alipmh__/">Alif Rizky</a>, All Right Reserved.
                            </div>
                            <div class="col-12 col-sm-6 text-center text-sm-end">
                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                                </br>
                                Distributed By <a class="border-bottom" href="https://themewagon.com"
                                    target="_blank">ThemeWagon</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
        @endif
    </div>
    <!-- Content End -->
    @if ($title !== 'Login')
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    @endif
    <!-- Back to Top -->

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

    {{-- Template Sweet Alert --}}
    <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>

    {{-- Tooltip --}}
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

</body>

</html>
