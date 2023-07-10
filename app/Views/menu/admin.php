<ul class="nav-main">
    <!-- BEGIN: Menu (Dashboard) -->
    <li class="nav-main-item">
        <a class="nav-main-link" href="<?= site_url('auth'); ?>">
            <i class="nav-main-link-icon fad fa-home-lg-alt"></i>
            <span class="nav-main-link-name">Dashboard</span>
        </a>
    </li>
    <!-- END: Menu (Dashboard) -->

    <li class="nav-main-heading">Menu Utama</li>

    <!-- BEGIN: Menu Utama (Admin) -->
    <!-- <li class="nav-main-item">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false"
            href="javascript:void(0)">
            <i class="nav-main-link-icon fad fa-user-headset"></i>
            <span class="nav-main-link-name">Admin</span>
        </a>
        <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                    <span class="nav-main-link-name">Data Admin</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                    <span class="nav-main-link-name">Tambah Admin</span>
                </a>
            </li>
        </ul>
    </li> -->
    <!-- END: Menu Utama (Admin) -->

    <!-- BEGIN: Menu Utama (Instruktur) -->
    <li class="nav-main-item">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false"
            href="javascript:void(0)">
            <i class="nav-main-link-icon fad fa-user-tie"></i>
            <span class="nav-main-link-name">Instruktur</span>
        </a>
        <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?= site_url('/admin/instruktur'); ?>">
                    <span class="nav-main-link-name">Data Instruktur</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?= base_url('instruktur/tambah'); ?>">
                    <span class="nav-main-link-name">Tambah Instruktur</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- END: Menu Utama (Instruktur) -->

    <!-- BEGIN: Menu Utama (Siswa) -->
    <li class="nav-main-item">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false"
            href="javascript:void(0)">
            <i class="nav-main-link-icon fad fa-user"></i>
            <span class="nav-main-link-name">Siswa</span>
        </a>
        <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                    <span class="nav-main-link-name">Data Siswa</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                    <span class="nav-main-link-name">Tambah Siswa</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- END: Menu Utama (Siswa) -->

    <!-- BEGIN: Menu Utama (Mobil) -->
    <li class="nav-main-item">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false"
            href="javascript:void(0)">
            <i class="nav-main-link-icon fad fa-car"></i>
            <span class=" nav-main-link-name">Mobil</span>
        </a>
        <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?= site_url('admin/mobil'); ?>">
                    <span class="nav-main-link-name">Data Mobil</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?= site_url('mobil/tambah'); ?>">
                    <span class="nav-main-link-name">Tambah Mobil</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- END: Menu Utama (Mobil) -->

    <!-- BEGIN: Menu Utama (Jadwal) -->
    <li class="nav-main-item">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false"
            href="javascript:void(0)">
            <i class="nav-main-link-icon fad fa-calendar"></i>
            <span class=" nav-main-link-name">Jadwal</span>
        </a>
        <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                    <span class="nav-main-link-name">Data Jadwal</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                    <span class="nav-main-link-name">Tambah Jadwal</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- END: Menu Utama (Jadwal) -->

    <!-- BEGIN: Menu Utama (Paket) -->
    <li class="nav-main-item">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false"
            href="javascript:void(0)">
            <i class="nav-main-link-icon fad fa-cubes"></i>
            <span class="nav-main-link-name">Paket</span>
        </a>
        <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?= site_url('admin/paket'); ?>">
                    <span class="nav-main-link-name">Data Paket</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="<?= site_url('paket/tambah'); ?>">
                    <span class="nav-main-link-name">Tambah Paket</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- END: Menu Utama (Paket) -->

    <!-- BEGIN: Menu Utama (Transaksi) -->
    <li class="nav-main-item">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false"
            href="javascript:void(0)">
            <i class="nav-main-link-icon fad fa-credit-card"></i>
            <span class=" nav-main-link-name">Transaksi</span>
        </a>
        <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                    <span class="nav-main-link-name">Data Transaksi</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                    <span class="nav-main-link-name">Tambah Transaksi</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- END: Menu Utama (Transaksi) -->

    <!-- BEGIN: Menu Utama (Laporan) -->
    <li class="nav-main-item">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false"
            href="javascript:void(0)">
            <i class="nav-main-link-icon fad fa-folder"></i>
            <span class=" nav-main-link-name">Laporan</span>
        </a>
        <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                    <span class="nav-main-link-name">Data Laporan</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="javascript:void(0)">
                    <span class="nav-main-link-name">Tambah Laporan</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- END: Menu Utama (Laporan) -->

    <li class="nav-main-heading">Menu Lainnya</li>

    <!-- BEGIN: Menu Lainnya (Daftar Pengguna) -->
    <li class="nav-main-item">
        <a class="nav-main-link" href="<?= site_url('admin/userlist'); ?>">
            <i class="nav-main-link-icon fad fa-user-cog"></i>
            <span class="nav-main-link-name">Daftar Pengguna</span>
        </a>
    </li>
    <!-- END: Menu Lainnya (Daftar Pengguna) -->
    <!-- BEGIN: Menu (Logout) -->
    <li class="nav-main-item">
        <a class="nav-main-link" href="<?= site_url('logout'); ?>">
            <i class="nav-main-link-icon fad fa-sign-out-alt"></i>
            <span class="nav-main-link-name">Keluar</span>
        </a>
    </li>
    <!-- END: Menu (Logout) -->
</ul>