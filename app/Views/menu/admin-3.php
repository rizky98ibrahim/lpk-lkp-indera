<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
    id="#kt_aside_menu" data-kt-menu="true">
    <!-- BEGIN: Menu (Dashboard)-->
    <div class="menu-item">
        <a class="menu-link" href="<?= site_url('auth'); ?>">
            <span class="menu-icon">
                <i class="fas fa-home-lg-alt fs-3"></i>
            </span>
            <span class="menu-title">Dashboard</span>
        </a>
    </div>
    <!-- END: Menu (Dashboard)-->

    <!-- BEGIN: Judul Menu (Utama)-->
    <div class="menu-item">
        <div class="menu-content pt-8 pb-2">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">Menu Utama</span>
        </div>
    </div>
    <!-- END: Judul Menu (Utama)-->

    <!-- BEGIN: Menu (Admin)-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <i class="fad fa-user-tie fs-2"></i>
            </span>
            <span class="menu-title">Admin</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Data Admin</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Tambah Admin</span>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Menu (Admin)-->

    <!-- BEGIN: Menu (Instruktur)-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <i class="fad fa-user-shield fs-2"></i>
            </span>
            <span class="menu-title">Instruktur</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Data Instruktur</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Tambah Instruktur</span>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Menu (Instruktur)-->

    <!-- BEGIN: Menu (Siswa)-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <i class="fad fa-user fs-2"></i>
            </span>
            <span class="menu-title">Siswa</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Data Siswa</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Tambah Siswa</span>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Menu (Siswa)-->

    <!-- BEGIN: Menu (Jadwal)-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <i class="fad fa-calendar fs-2"></i>
            </span>
            <span class="menu-title">Jadwal</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Data Jadwal</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Tambah Jadwal</span>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Menu (Jadwal)-->

    <!-- BEGIN: Menu (Mobil)-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <i class="fad fa-car fs-2"></i>
            </span>
            <span class="menu-title">Mobil</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Data Mobil</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Tambah Mobil</span>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Menu (Mobil)-->

    <!-- BEGIN: Menu (Paket)-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <i class="fad fa-cubes fs-2"></i>
            </span>
            <span class="menu-title">Paket</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div class="menu-item">
                <a class="menu-link" href="<?= site_url('admin/paket'); ?>">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Data Paket</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Tambah Paket</span>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Menu (Paket)-->

    <!-- BEGIN: Menu (Transaksi)-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <i class="fad fa-credit-card fs-2"></i>
            </span>
            <span class="menu-title">Transaksi</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Data Transaksi</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Tambah Transaksi</span>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Menu (Transaksi)-->

    <!-- BEGIN: Menu (Laporan)-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <i class="fad fa-folder fs-2"></i>
            </span>
            <span class="menu-title">Laporan</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Data Laporan</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Tambah Laporan</span>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Menu (Laporan)-->

    <!-- BEGIN: Judul Menu (Lainnya)-->
    <div class="menu-item">
        <div class="menu-content pt-8 pb-2">
            <span class="menu-section text-muted text-uppercase fs-8 ls-1">Menu Lainnya</span>
        </div>
    </div>
    <!-- END: Judul Menu (Lainnya)-->

    <!-- BEGIN: Menu (Manage Users)-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <i class="fad fa-user-cog fs-2"></i>
            </span>
            <span class="menu-title">Kelola Pengguna</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion menu-active-bg">
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Daftar Pengguna</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Hak Akses</span>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Menu (Manage Users)-->

    <!-- BEGIN: Menu (Logout)-->
    <div class="menu-item">
        <a class="menu-link" href="<?= site_url('logout'); ?>">
            <span class="menu-icon">
                <i class="fad fa-sign-out-alt fs-3"></i>
            </span>
            <span class="menu-title">Keluar</span>
        </a>
    </div>
    <!-- END: Menu (Logout)-->
</div>