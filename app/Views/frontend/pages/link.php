<!DOCTYPE html>

<html>

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

    <!-- BEGIN: File CSS-->
    <link rel="stylesheet" href="<?= base_url(); ?>/frontend/css/link.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/frontend/css/fontawesome.css">
    <!-- END: File CSS-->
</head>

<body>
    <a href="<?= base_url(); ?>">
        <img id="userPhoto" alt="Logo LPK" src="<?= base_url(); ?>/frontend/images/logo.svg">
    </a>
    <h1>LPK-LKP INDERA</h1>
    <div id="description">
        Akses cepat hubungi kami via whatsapp.
    </div>
    <div id="links">
        <a class="link" href="https://wa.me/6282226213111" target="_blank">0822-2621-3111 (Novita)</a>
        <a class="link" href="https://wa.me/6281225539991" target="_blank">0812-2553-9991 (Okta)</a>
        <a class="link" href="https://wa.me/6281216637989" target="_blank">0812-1663-7989 (Damaiyanti)</a>
        <a class="link" href="https://wa.me/6281390204355" target="_blank">0813-9020-4355 (Ari)</a>
        <a class="link" href="https://wa.me/6282326279991" target="_blank">08823-2627-9991 (Ana)</a>
    </div>

    <!-- BEGIN: File JavaScript-->
    <script src="<?= base_url(); ?>/frontend/js/link.js"></script>
    <script src="<?= base_url(); ?>/frontend/js/fontawesome.js"></script>
    <script src="<?= base_url(); ?>/frontend/js/plugins.init.js"></script>
    <script src="<?= base_url(); ?>/frontend/js/app.js"></script>
    <!-- END: File JavaScript-->
</body>

</html>