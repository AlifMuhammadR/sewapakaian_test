<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route(Auth::user()->level === 'admin' ? 'admin' : (Auth::user()->level === 'owner' ? 'owner' : 'courier')) }}"
            class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">SEWA PAKAIAN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('back-end/img/admin.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>{{ Auth::user()->level }}</span>
            </div>
        </div>

        @if ($title === 'Admin - Sija')
            <!-- Menu Start -->
            <div class="navbar-nav w-100">
                <a href="{{ route('admin') }}"
                    class="nav-item nav-link @if (!@isset($menu)) active @endif"><i
                        class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Elements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Buttons</a>
                    <a href="typography.html" class="dropdown-item">Typography</a>
                    <a href="element.html" class="dropdown-item">Other Elements</a>
                </div> --}}
                </div>
                <a href="{{ route('payment_method') }}"
                    class="nav-item nav-link @if (@isset($menu) and $menu === 'Payment Method') active @endif"><i
                        class="fa fa-credit-card me-2"></i>Payment Method</a>
                <a href="{{ route('clothes') }}"
                    class="nav-item nav-link @if (@isset($menu) and $menu === 'Clothes') active @endif"><i
                        class="fa fa-tshirt me-2"></i>Clothes</a>
                <a href="{{ route('orders') }}"
                    class="nav-item nav-link @if (@isset($menu) and $menu === 'Orders') active @endif"><i
                        class="fa fa-shopping-bag me-2"></i>Orders</a>
                {{-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="#" class="dropdown-item">Blank Page</a>
                </div>
            </div> --}}
            </div>
            <!-- Menu End -->
        @elseif ($title === 'Courier')
            <div class="navbar-nav w-100">
                <a href="{{ route('courier') }}"
                    class="nav-item nav-link @if (!@isset($menu)) active @endif"><i
                        class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="{{ route('courier') }}"
                    class="nav-item nav-link @if (@isset($menu) and $menu === 'Shipping') active @endif"><i
                        class="fa fa-shipping-fast me-2"></i>Shipping</a>
            </div>
        @else
            <!-- Menu Start -->
            <div class="navbar-nav w-100">
                <a href="{{ route('owner') }}"
                    class="nav-item nav-link @if (!@isset($menu)) active @endif"><i
                        class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown" data-bs-auto-close="outside">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-laptop me-2"></i>Reports</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ route('clothes') }}"
                            class="dropdown-item @if (@isset($menu) and $menu === 'Clothes') active @endif"><i
                                class="fa fa-tshirt me-2"></i>Clothes</a>
                        <a href="{{ route('owner') }}" class="dropdown-item"><i
                                class="fa fa-shopping-bag me-2"></i>Orders</a>
                        <a href="{{ route('owner') }}" class="dropdown-item"><i
                                class="fa fa-shipping-fast me-2"></i>Shipping</a>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        @endif

    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Menangkap elemen dropdown dan menu
            const dropdownToggle = document.querySelector('.dropdown-toggle');
            const dropdownMenu = document.querySelector('.dropdown-menu');

            // Event listener untuk item di dalam dropdown agar dropdown tidak menutup
            dropdownMenu.addEventListener('click', function(e) {
                e.stopPropagation(); // Mencegah penutupan dropdown
                const dropdown = new bootstrap.Dropdown(dropdownToggle);
                dropdown.show();
            });
        });
    </script>
</div>

<!-- Sidebar End -->
