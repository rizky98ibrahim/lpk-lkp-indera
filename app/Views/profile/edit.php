<!-- BEGIN: Halaman [Mobil Edit] -->
<?= $this->extend('backend/layout'); ?>

<!-- BEGIN: Custom File (CSS)-->
<?= $this->section('pageStyles'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/flatpickr/flatpickr.min.css">
<?= $this->endSection(); ?>
<!-- END: Custom File (CSS)-->

<!-- END: Section [Content] -->
<?= $this->section('content'); ?>

<!-- BEGIN: Judul Halaman (Content) -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Ubah Data Mobil</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('admin/mobil'); ?>">Data Mobil</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Ubah</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- END: Judul Halaman (Content) -->

<!-- BEGIN: Isi Halaman (Content) -->

<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Form Ubah Data Mobil</h3>
            <div class="block-options">
                <a href="/admin/mobil/" class="btn btn-sm btn-primary">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12">
                    <form>
                        <?= csrf_field(); ?>
                        <div class="row">
                            <!-- BEGIN: Form Nama Mobil -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nama">Nama Mobil</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                                        id="nama" name="nama" aria-describedby="nama" placeholder="Masukan nama mobil"
                                        autofocus value="">
                                    <div id="nama" class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Nama Mobil -->


                            <!-- BEGIN: Tombol Simpan dan Batal -->
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary ">Simpan</button>
                                <a href="<?= site_url('admin/mobil'); ?>" class="btn btn-danger ">Batal</a>
                            </div>
                            <!-- END: Tombol Simpan dan Batal -->

                            <!-- BEGIN: Form Preview Mobil -->
                            <div class="col-md-6 mb-3">
                                <img src="/backend/media/mobil/default.png" class="img-thumbnail img-preview">
                            </div>
                            <!-- END: Form Preview Mobil -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Isi Halaman (Content) -->
<!-- END: Section [Content] -->

<!-- BEGIN: Custom File (JavaScript)-->
<?= $this->section('pageScript'); ?>>

<?= $this->endSection(); ?>
<!-- END: Custom File (JavaScript)-->

<!-- Page JS Helpers (Select2 plugin) -->>

<!-- Page JS Code -->
<!-- <script src="<?= base_url(); ?>/backend/js/plugins/flatpickr/flatpickr.min.js"></script> -->
<script src="<?= base_url(); ?>/backend/js/pages/init-preview.js"></script>
<?= $this->endSection(); ?>
<!-- END: Halaman [Mobil Edit] -->