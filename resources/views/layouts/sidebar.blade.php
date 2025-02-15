<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0" href="{{ route('dashboard')}}">
            <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
            <span class="ms-1 text-sm text-dark">Transfox</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard') }}">
                <i class="material-symbols-rounded opacity-5">dashboard</i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('barang') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('barang.index') }}">
                    <i class="material-symbols-rounded opacity-5">inventory_2</i>
                    <span class="nav-link-text ms-1">Stok Barang</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('staff') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('staff.index') }}">
                    <i class="material-symbols-rounded opacity-5">table_view</i>
                    <span class="nav-link-text ms-1">Staff</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('testimonial') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('testimonial.index') }}">
                    <i class="material-symbols-rounded opacity-5">mail</i>
                    <span class="nav-link-text ms-1">Testimoni Masuk</span>
                </a>
            </li>
            <ul class="nav flex-column">
            <!-- Menu Utama -->
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="collapse" href="#submenuLogistik" role="button">
                    <i class="material-symbols-rounded opacity-5">Input</i>
                    <span class="nav-link-text ms-1">Input</span>
                    </a>
                    <ul class="collapse list-unstyled" id="submenuLogistik">
                        <!--<li><a class="nav-link text-dark" href="{{route('ibarang.index')}}">Stock</a></li>-->
                        <!--<li><a class="nav-link text-dark" href="{{route('departemen.index')}}">Departemen</a></-->li>
                        <li><a class="nav-link text-dark" href="{{route('role.index')}}">Role</a></li>
                 </ul>
                </li>
            </ul>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="../pages/profile.html">
                    <i class="material-symbols-rounded opacity-5">person</i>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0">
        <div class="mx-3">
        <a class="btn btn-outline-dark mt-4 w-100" href="{{ route('home')}}" type="button">Kembali ke halaman</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn bg-gradient-dark w-100">Log Out</button>
            </form>
        </div>
    </div>
</aside>