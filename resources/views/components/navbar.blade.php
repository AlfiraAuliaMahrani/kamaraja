<!-- SIDEBAR -->
<section id="sidebar">
    <a class="brand">
        <i class='bx bxs-buildings'></i>
        <span class="text">Total Indo Bangunusa</span>
    </a>
    <ul class="side-menu top">
        <li class="{{ request()->is('dashboardDirektur') ? 'active' : '' }}">
            <a href="dashboardDirektur">
                <i class="bx bxs-dashboard"></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="{{ request()->is('mutasiDirektur') ? 'active' : '' }}">
            <a href="mutasiDirektur">
                <i class="bx bx-history"></i>
                <span class="text">Riwayat Mutasi</span>
            </a>
        </li>
        <li class="{{ request()->is('projectDirektur') ? 'active' : '' }}">
            <a href="projectDirektur">
                <i class='bx bxs-briefcase'></i>
                <span class="text">Manajemen proyek</span>
            </a>
        </li>
        <li class="{{ request()->is('laporanDirektur') ? 'active' : '' }}">
            <a href="laporanDirektur">
                <i class="bx bx-file"></i>
                <span class="text">Laporan Transaksi</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu bottom">
        <li>
            <a href="#">
                <i class="bx bxs-help-circle"></i>
                <span class="text">Pusat Bantuan</span>
            </a>
        </li>
        {{-- <li>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="logout">
                <i class="bx bxs-log-out-circle"></i>
                <span class="text">Logout</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li> --}}
    </ul>
</section>
<!-- SIDEBAR -->

<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search..." />
                <button type="submit" class="search-btn">
                    <i class="bx bx-search"></i>
                </button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden />
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
            <i class="bx bxs-bell"></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="img/people.png" />
        </a>
    </nav>
    <!-- NAVBAR -->
