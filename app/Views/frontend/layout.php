<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Website Resmi LPK/LKP Indera" />
    <meta name="keywords" content="Kursus Mengemudi terbaik di Magelang" />
    <meta name="author" content="Muhammad Rizky Ibrahim" />
    <meta name="website" content="https://github.com/rizkyculture/" />
    <meta name="email" content="rizkyculture@gmail.com" />
    <meta name="version" content="v1.0" />

    <!-- BEGIN: Title & Favicon-->
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/frontend/images/favicon.ico">
    <!-- END: Title & Favicon-->

    <!-- BEGIN: FILE (CSS)-->
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" href="<?= base_url(); ?>/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/frontend/css/tiny-slider.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/frontend/css/aos.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/frontend/css/tobii.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Icons CSS-->
    <link rel="stylesheet" href="<?= base_url(); ?>/frontend/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/frontend/css/fontawesome.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- END: Icons CSS-->

    <!-- BEGIN: Theme CSS-->
    <link href="<?= base_url(); ?>/frontend/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="<?= base_url(); ?>/frontend/css/colors/default.css" rel="stylesheet" id="color-opt">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Custom CSS-->
    <?= $this->renderSection('pageStyles') ?>
    <!-- END: Custom CSS-->

    <!-- END: FILE (CSS)-->

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="20">

    <!-- BEGIN: Header, Content & Footer-->
    <?= $this->include('frontend/header'); ?>

    <?= $this->renderSection('content') ?>
    <?= $this->include('frontend/footer'); ?>
    <!-- END: Header, Content & Footer-->

    <!-- BEGIN:  Back to top-->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5">
        <i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
    <!-- END: Back to top-->

    <!-- BEGIN: FILE (JavaScript)-->
    <!-- BEGIN: Vendor JavaScript-->
    <script src="<?= base_url(); ?>/frontend/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/frontend/js/tobii.min.js "></script>
    <script src="<?= base_url(); ?>/frontend/js/tiny-slider.js "></script>
    <script src="<?= base_url(); ?>/frontend/js/aos.js "></script>
    <script src="<?= base_url(); ?>/frontend/js/parallax.js "></script>
    <script src="<?= base_url(); ?>/frontend/js/shuffle.min.js "></script>

    <!-- END: Vendor JavaScript-->

    <!-- BEGIN: Icons JavaScript-->
    <script src="<?= base_url(); ?>/frontend/js/fontawesome.js"></script>
    <script src="<?= base_url(); ?>/frontend/js/feather.min.js"></script>
    <!-- END: Icons JavaScript-->

    <!-- BEGIN: Theme JavaScript-->
    <script src="<?= base_url(); ?>/frontend/js/plugins.init.js"></script>
    <script src="<?= base_url(); ?>/frontend/js/app.js"></script>
    <!-- END: Theme JavaScript-->

    <!-- END: FILE (JavaScript)-->
</body>

</html>