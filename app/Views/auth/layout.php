<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Resmi LPK/LKP Indera" />
    <meta name="keywords" content="Kursus Mengemudi terbaik di Magelang" />
    <meta name="author" content="Muhammad Rizky Ibrahim" />
    <meta name="website" content="https://github.com/rizkyculture/" />
    <meta name="email" content="rizkyculture@gmail.com" />
    <meta name="version" content="v1.0" />

    <!-- BEGIN: Title & Favicon-->
    <?= $this->renderSection('title') ?>
    <link rel="shortcut icon" href="<?= base_url(); ?>/frontend/images/favicon.ico">
    <!-- END: Title & Favicon-->

    <!-- BEGIN: FILE (CSS)-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" href="<?= base_url(); ?>/frontend/css/bootstrap.min.css">
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
<!-- BEGIN: Content-->
<?= $this->renderSection('content'); ?>
<!-- END: Content-->

<!-- BEGIN: FILE (JavaScript)-->
<script src="<?= base_url(); ?>/frontend/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/frontend/js/switcher.js "></script>
<script src="<?= base_url(); ?>/frontend/js/fontawesome.js"></script>
<script src="<?= base_url(); ?>/frontend/js/feather.min.js"></script>
<script src="<?= base_url(); ?>/frontend/js/plugins.init.js"></script>
<script src="<?= base_url(); ?>/frontend/js/app.js"></script>

<!-- BEGIN: Custom JavaScript-->
<?= $this->renderSection('pageScripts') ?>
<!-- END: Custom JavaScript-->

<!-- END: FILE (JavaScript)-->
</body>

</html>