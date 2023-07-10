<!DOCTYPE html>
<html lang="en">

<head>
    <!-- BEGIN: Meta Tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Website Resmi LPK/LKP Indera,Stir Mobil Muntilan, Stir Mobil Salaman, Stir Mobil Mertoyudan, LPK INDERA Mertoyudan, LPK INDERA Muntilan, LPK INDERA Sawitan, LPK INDERA Salaman Kursus Mengemudi Magelang, Kursus mengemudi LPK/LKP INDERA, LPK/LKP INDERA, Kursus Mengmeudi Magelang, Kursus Stir Magelang, Belajar Mengemudi Magelang, Pembuatan SIM Magelang, Stir Mobil Jawa Tengah, Belajar Mobil Jawa Tengah, Belajar Mobil Borobudur, LPK-LKP INDERA, Tempat belajar, kursus, setir - mengemudi mobil di MAGELANG Harga murah" />
    <meta name="keywords" content="Kursus Mengemudi Magelang" />
    <meta name="title" content="LPK/LKP INDERA - Kursus Mengemudi Terbaik di Magelang" />
    <meta name="url" content="https://lpk-lkpindera.com/" />
    <meta name="site_name" content="LPK/LKP INDERA" />
    <meta name="author" content="Muhammad Rizky Ibrahim" />
    <meta name="website" content="https://github.com/rizkyculture/" />
    <meta name="email" content="rizkyculture@gmail.com" />
    <meta name="version" content="v1.0" />
    <meta name="google-site-verification" content="Hv7NLr_W_5ZoFuvxaO_4gdpPtKhgjNjTvkz-002yoXI" />
    <!-- END: Meta Tag -->

    <!-- BEGIN: OpenGraph Meta -->
    <meta property="og:title" content="LPK/LKP INDERA - Kursus Mengemudi Terbaik di Magelang">
    <meta property="og:site_name" content="LPK/LKP INDERA">
    <meta property="og:description"
        content="Website Resmi LPK/LKP Indera,Stir Mobil Muntilan, Stir Mobil Salaman, Stir Mobil Mertoyudan, LPK INDERA Mertoyudan, LPK INDERA Muntilan, LPK INDERA Sawitan, LPK INDERA Salaman Kursus Mengemudi Magelang, Kursus mengemudi LPK/LKP INDERA, LPK/LKP INDERA, Kursus Mengmeudi Magelang, Kursus Stir Magelang, Belajar Mengemudi Magelang, Pembuatan SIM Magelang, Stir Mobil Jawa Tengah, Belajar Mobil Jawa Tengah, Belajar Mobil Borobudur, LPK-LKP INDERA, Tempat belajar, kursus, setir - mengemudi mobil di MAGELANG Harga murah">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://lpk-lkpindera.com/">
    <meta property="og:locale" content="id_ID" />
    <!-- END: OpenGraph Meta -->

    <!-- BEGIN: Title, Favicon & Fonts-->
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/backend/media/favicons/favicon.ico" />
    <!-- END: Title, Favicon & Fonts-->

    <!-- BEGIN: File Stylesheets (CSS) -->
    <!-- BEGIN: CSS Utama (Semua Halaman) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="<?= base_url(); ?>/backend/css/dashmix.css">
    <!-- END: CSS Utama (Semua Halaman) -->
    <!-- BEGIN: Custom CSS-->
    <?= $this->renderSection('pageStyles') ?>
    <!-- END: Custom CSS-->
    <!-- END: File Stylesheets (CSS)-->
</head>

<body>
    <!-- BEGIN: Halaman (Container) -->
    <div id="page-container"
        class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-footer-fixed main-content-narrow">

        <!-- BEGIN: Menu (Sidebar) -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- BEGIN: Sidebar (Logo dan Toggle) -->
            <div class="bg-header-dark">
                <div class="content-header bg-white-5">
                    <!-- BEGIN: Logo (Dashboard) Header -->
                    <a class="fw-semibold text-dark tracking-wide" href="<?= base_url('auth'); ?>">
                        <span class="smini-visible">
                            I<span class="opacity-75">n</span>
                        </span>
                        <span class="smini-hidden">
                            LPK/LKP<span class="text-white"> INDERA</span>
                        </span>
                    </a>
                    <!-- END: Logo (Dashboard) Header-->

                    <!-- BEGIN: Options (Toggle) Header-->
                    <div>
                        <!-- BEGIN: Toggle (Layout) -->
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                            data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
                            onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                            <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                        </button>
                        <!-- END: Toggle (Layout) -->

                        <!-- BEGIN: Toggle (Dark Mode) -->
                        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                            data-target="#dark-mode-toggler" data-class="far fa"
                            onclick="Dashmix.layout('dark_mode_toggle');">
                            <i class="far fa-moon" id="dark-mode-toggler"></i>
                        </button>
                        <!-- END: Toggle (Dark Mode) -->

                        <!-- BEGIN: Toggle (Close Sidebar) [Hanya Untuk Mobile] -->
                        <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                            data-action="sidebar_close">
                            <i class="fa fa-times-circle"></i>
                        </button>
                        <!-- END: Toggle (Close Sidebar) [Hanya Untuk Mobile] -->
                    </div>
                    <!-- END: Options (Toggle) Header -->
                </div>
            </div>
            <!-- END: Sidebar (Logo dan Toggle) -->

            <!-- BEGIN: Sidebar (Menu Navigasi) -->
            <div class="js-sidebar-scroll">
                <div class="content-side">
                    <?php
                    if (in_groups('admin')) {
                        echo $this->include('menu/admin');
                    } else if (in_groups('instruktur')) {
                        echo $this->include('menu/instruktur');
                    } else if (in_groups('siswa')) {
                        echo $this->include('menu/siswa');
                    } else {
                    }
                    ?>
                </div>
            </div>
            <!-- END: Sidebar (Menu Navigasi) -->
        </nav>
        <!-- END: Menu (Sidebar) -->

        <!-- BEGIN: Menu (Header) -->
        <header id="page-header">
            <!-- BEGIN: Header Content -->
            <div class="content-header">
                <!-- BEGIN: Header Menu (Kiri) -->
                <div class="space-x-1">
                    <button type="button" class="btn btn-alt-secondary" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <!-- END: Header Menu (Kiri) -->

                <!-- BEGIN: Header Menu (Kanan) -->
                <div class="space-x-1">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-alt-secondary dropdown-toggle"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="d-none d-sm-inline me-1"><?= user()->nama; ?></span>
                            <!-- <span class="badge rounded-pill bg-success">PRO</span> -->
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-user-dropdown">
                            <div class="rounded-top fw-semibold text-white text-center bg-primary">
                                <div class="p-3">
                                    <img class="img-avatar img-avatar-thumb"
                                        src="<?= base_url(); ?>/backend/media/avatars/<?= user()->avatar; ?>" alt="">
                                </div>
                                <div class="p-3 bg-primary-dark-op">
                                    <a class="text-white fw-semibold" href="javascript:void(0)"><?= user()->nama; ?></a>
                                    <div class="text-white-75"><?= user()->email; ?></div>
                                </div>
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                    href="javascript:void(0)">
                                    Profil Saya
                                    <i class="fad fa-user-circle text-primary ms-1"></i>
                                </a>
                                <!-- <div role="separator" class="dropdown-divider"></div> -->
                                <a class="dropdown-item d-flex justify-content-between align-items-center"
                                    href="<?= site_url('logout'); ?>">Keluar
                                    <i class="fad fa-sign-out-alt text-primary ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Header Menu (Kanan) -->
            </div>
            <!-- END Header Content -->


            <!-- BEGIN: Header Loader -->
            <div id="page-header-loader" class="overlay-header bg-header-dark">
                <div class="bg-white-10">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Header Loader -->
        </header>
        <!-- END: Menu (Header) -->

        <!-- BEGIN: Menu (Content) -->
        <main id="main-container">
            <?= $this->renderSection('content'); ?>
        </main>
        <!-- END: Menu (Content) -->

        <!-- BEGIN: Menu (Footer) -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-0">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                        Dibuat dengan <i class="fas fa-heart text-danger"></i> Oleh <a class="fw-semibold"
                            href="https://wa.me/+6285961412226" target="_blank">Rizky Ibrahim</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 text-center text-sm-start"> Copyright &copy; <span
                            data-toggle="year-copy"></span>
                        <a class="fw-semibold" href="<?= base_url(); ?>" target="_blank">Kursus Mengemudi
                            Indera</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: Menu (Footer) -->
    </div>
    <!-- END: Halaman (Container) -->

    <!-- BEGIN: File JS (JavaScript)-->
    <!-- BEGIN: Global JavaScript (Semua Halaman)-->
    <!-- <script src="<?= base_url(); ?>/backend/_js/main/app.js"></script> -->
    <script src="<?= base_url(); ?>/backend/js/lib/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/backend/js/dashmix.app.min.js"></script>
    <script src="<?= base_url(); ?>/backend/js/icons.js"></script>
    <!--END: Global JavaScript (Semua Halaman)-->

    <!-- BEGIN: Custom JavaScript (Halaman Tertentu) -->
    <?= $this->renderSection('pageScript') ?>
    <!-- END: Custom JavaScript (Halaman Tertentu)-->
    <!-- END: File JS (JavaScript)-->
</body>

</html>