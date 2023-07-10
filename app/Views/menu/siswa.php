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

    <!-- BEGIN: Menu Utama (Paket) -->
    <li class="nav-main-item">
        <a class="nav-main-link" href="<?= site_url('/data-paket'); ?>">
            <i class="nav-main-link-icon fas fa-cubes"></i>
            <span class="nav-main-link-name">Paket</span>
        </a>
    </li>
    <!-- END: Menu Utama (Paket) -->

    <!-- BEGIN: Menu Utama (Formulir Pendaftaran) -->
    <li class="nav-main-item">
        <a class="nav-main-link" href="<?= site_url('/pendaftaran'); ?>">
            <i class="nav-main-link-icon fas fa-clipboard-list-check"></i>
            <span class="nav-main-link-name">Formulir Pendaftaran</span>
        </a>
    </li>
    <!-- END: Menu Utama (Formulir Pendaftaran) -->

    <!-- BEGIN: Menu Utama (Jadwal) -->
    <li class="nav-main-item">
        <a class="nav-main-link" href="javascript:void(0)">
            <i class="nav-main-link-icon fas fa-calendar-alt"></i>
            <span class="nav-main-link-name">Jadwal</span>
        </a>
    </li>
    <!-- END: Menu Utama (Jadwal) -->

    <!-- BEGIN: Menu Utama (Bukti Pembayaran) -->
    <li class="nav-main-item">
        <a class="nav-main-link" href="<?= site_url('siswa/pembayaran'); ?>">
            <i class="nav-main-link-icon fas fa-money-bill"></i>
            <span class="nav-main-link-name">Bukti Pembayaran</span>
        </a>
    </li>
    <!-- END: Menu Utama (Bukti Pembayaran) -->

    <li class="nav-main-heading">Menu Data</li>

    <li class="nav-main-item">
        <a class="nav-main-link" href="<?= site_url('/data-mobil'); ?>">
            <i class="nav-main-link-icon fad fa-car"></i>
            <span class="nav-main-link-name">Mobil</span>
        </a>
    </li>
    <!-- BEGIN: Menu Utama (Sertifikat) -->
    <li class="nav-main-item">
        <a class="nav-main-link" href="javascript:void(0)">
            <i class="nav-main-link-icon fas fa-file-chart-line"></i>
            <span class="nav-main-link-name">Nilai</span>
        </a>
    </li>
    <!-- END: Menu Utama (Sertifikat) -->

    <!-- BEGIN: Menu Utama (Sertifikat) -->
    <li class="nav-main-item">
        <a class="nav-main-link" href="javascript:void(0)">
            <i class="nav-main-link-icon fas fa-file-certificate"></i>
            <span class="nav-main-link-name">Sertifikat</span>
        </a>
    </li>
    <!-- END: Menu Utama (Sertifikat) -->

    <li class="nav-main-heading">Menu Lainnya</li>

    <!-- BEGIN: Menu Lainnya (Profile) -->
    <li class="nav-main-item">
        <a class="nav-main-link" href="<?= site_url('siswa/profil'); ?>">
            <i class="nav-main-link-icon fas fa-user-edit"></i>
            <span class="nav-main-link-name">Profile</span>
        </a>
    </li>
    <!-- END: Menu Lainnya (Profile) -->

    <!-- BEGIN: Menu (Logout) -->
    <li class="nav-main-item">
        <a class="nav-main-link" href="<?= site_url('logout'); ?>">
            <i class="nav-main-link-icon fas fa-sign-out-alt"></i>
            <span class="nav-main-link-name">Keluar</span>
        </a>
    </li>
    <!-- END: Menu (Logout) -->
</ul>