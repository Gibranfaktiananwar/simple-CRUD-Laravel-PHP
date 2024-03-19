<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="./index.html">
            <h4 class="text-white">Peminjaman Barang</h4>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow" href="{{ route('dashboard') }}">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i>
                    Dashboard
                </a>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">MASTER DATA</div>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow collapsed" href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                    <i data-feather="layers" class="nav-icon icon-xs me-2"> </i>
                    Pengguna
                </a>

                <div id="navPages" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">
                                Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow" href="/mahasiswa">
                                Mahasiswa
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow" href="/barang">
                    <i data-feather="package" class="nav-icon icon-xs me-2"> </i>
                    Barang
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="/Peminjaman">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2"> </i>
                    Peminjaman
                </a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link" href="Pengembalian">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2"> </i>
                    Pengembalian
                </a>
            </li>
        </ul>
    </div>
</nav>
