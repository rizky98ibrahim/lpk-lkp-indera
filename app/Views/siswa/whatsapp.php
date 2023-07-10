<!-- BEGIN: Halaman [Paket] -->
<?= $this->extend('backend/layout'); ?>

<!-- BEGIN: Custom File (CSS)-->
<?= $this->section('pageStyles'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/datatables-btn-bs5/css/buttons.bootstrap5.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/datatables-bs5/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/sweetalert2/sweetalert2.min.css">
<?= $this->endSection(); ?>
<!-- END: Custom File (CSS)-->

<!-- BEGIN: Section [Content Konfirmasi Kursus] -->
<?= $this->section('content'); ?>

<!-- BEGIN: Judul Halaman Content (Konfirmasi Kursus) -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Konfirmasi Kursus</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Konfirmasi Kursus</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END: Judul Halaman Content (Konfirmasi Kursus) -->

<!-- BEGIN: Isi Halaman Content (Konfirmasi Kursus) -->
<div class="content">
    <div class="block block-themed">
        <div class="block-header block-header-default">
            <h2 class="block-title">Konfirmasi Kursus</h2>
        </div>

        <div class="block block-rounded">
            <div class="block-content block-content-full text-center">
                <img src="<?= base_url(); ?>/frontend/images/logo.svg" alt="" height="100" width="200">
                <p class="text-dark fs-3 fw-light mt-3 mb-0">
                    LPK-LKP INDERA
                </p>
                <p class="text-dark-75 mb-0">
                    Konfirmasi Kursus dengan cepat melalui chat whatsapp kami.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="row items-push-2x text-center">
                    <div class="col-sm-6 col-xl-4">
                        <a href="" class="btn btn-primary">Okta (Pusat)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Isi Halaman Content (Konfirmasi Kursus) -->

<!-- END: Section [Content Konfirmasi Kursus] -->

<!-- BEGIN: Custom File (JavaScript)-->
<?= $this->section('pageScript'); ?>

<?= $this->endSection(); ?>
<!-- END: Custom File (JavaScript)-->

<?= $this->endSection(); ?>
<!-- END: Halaman [Paket] -->