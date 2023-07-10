<!-- BEGIN: Halaman [Paket] -->
<?= $this->extend('backend/layout'); ?>

<!-- BEGIN: Custom File (CSS)-->
<?= $this->section('pageStyles'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/sweetalert2/sweetalert2.min.css">
<?= $this->endSection(); ?>
<!-- END: Custom File (CSS)-->

<!-- END: Section [Content] -->
<?= $this->section('content'); ?>

<!-- BEGIN: Judul Halaman (Content) -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Detail Data Paket</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('admin/paket'); ?>">Data Paket</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Detail Data Paket</h3>
                    <div class="block-options">
                        <a href="/siswa/paket/" class="btn btn-sm btn-danger">
                            <i class="fas fa-arrow-left me-1"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="block-content block-content-full ribbon ribbon-primary">
                    <div class="ribbon-box">
                        Rp<?php echo number_format($paket['harga_paket'], 2, ',', '.'); ?>
                    </div>
                    <div class="text-center py-4">
                        <div class="item item-circle bg-body-light mx-auto push">
                            <i class="fas fa-cubes fa-2x text-primary"></i>
                        </div>
                        <div class="fw-semibold"><?= $paket['nama_paket']; ?></div>
                        <div class="fs-sm text-muted">Transmisi : <?= $paket['jenis_paket']; ?></div>
                        <div class="fs-sm text-muted">Lama Pelatihan : <?= $paket['durasi_paket']; ?></div>
                        <div class="fs-sm text-muted">Keterangan : <?= $paket['ket_paket']; ?></div>
                    </div>
                </div>
                <div class="flex-grow-0 block-content block-content-full border-top text-muted text-center fw-semibold">
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                        Terakhir di perbarui : <?= $paket['updated_at']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Section [Content] -->

<!-- BEGIN: Custom File (JavaScript)-->
<?= $this->section('pageScript'); ?>>

<?= $this->endSection(); ?>
<!-- END: Custom File (JavaScript)-->
<script src="<?= base_url(); ?>/backend/js/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/pages-old/be_comp_dialogs.min.js"></script>
<?= $this->endSection(); ?>
<!-- END: Halaman [Paket] -->