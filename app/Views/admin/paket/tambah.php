<!-- BEGIN: Halaman [Paket] -->
<?= $this->extend('backend/layout'); ?>

<!-- BEGIN: Custom File (CSS)-->
<?= $this->section('pageStyles'); ?>

<?= $this->endSection(); ?>
<!-- END: Custom File (CSS)-->

<!-- END: Section [Content] -->
<?= $this->section('content'); ?>

<!-- BEGIN: Judul Halaman (Content) -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Tambah Paket</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('admin/paket'); ?>">Data Paket</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Form Tambah Data Paket</h3>
            <div class="block-options">
                <a href="/admin/paket/" class="btn btn-sm btn-danger">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <form id="paket-form" method="post" action="<?= site_url('admin/paket/simpan'); ?>"> -->
                    <form id="paket-form" method="post" action="<?= site_url('admin/paket/save'); ?>">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <!-- BEGIN: Form Nama Paket -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nama_paket">Nama Paket</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('nama_paket')) ? 'is-invalid' : ''; ?>"
                                        id="nama_paket" name="nama_paket" aria-describedby="nama_paket"
                                        placeholder="Masukan nama paket" autofocus value="<?= old('nama_paket'); ?>">
                                    <div id="nama_paket" class="invalid-feedback">
                                        <?= $validation->getError('nama_paket'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Nama Paket -->

                            <!-- BEGIN: Form Harga Paket -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="harga_paket">Harga Paket</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('harga_paket')) ? 'is-invalid' : ''; ?>"
                                        id="harga_paket" name="harga_paket" aria-describedby="harga_paket"
                                        placeholder="Masukan harga paket" value="<?= old('harga_paket'); ?>">
                                    <div id="harga_paket" class="invalid-feedback">
                                        <?= $validation->getError('harga_paket'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Harga Paket -->

                            <!-- BEGIN: Form Jenis Paket -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="jenis_paket">Transmisi</label>
                                    <select
                                        class="form-control <?= ($validation->hasError('jenis_paket')) ? 'is-invalid' : ''; ?> custom-select"
                                        id="jenis_paket" name="jenis_paket" aria-describedby="jenis_paket">
                                        <option selected disabled value="<?= old('jenis_paket'); ?>">Pilih Transmisi
                                        </option>
                                        <option value="Matic">Matic</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Kombinasi">Kombinasi</option>
                                    </select>
                                    <div id="jenis_paket" class="invalid-feedback">
                                        <?= $validation->getError('jenis_paket'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Jenis Paket -->

                            <!-- BEGIN: Form Durasi Paket -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="durasi_paket">Durasi Paket</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('durasi_paket')) ? 'is-invalid' : ''; ?> "
                                        id="durasi_paket" name="durasi_paket" aria-describedby="durasi_paket"
                                        placeholder="Durasi + (Jam) = 2 Jam" value="<?= old('durasi_paket'); ?>">
                                    <div id="durasi_paket" class="invalid-feedback">
                                        <?= $validation->getError('durasi_paket'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Durasi Paket -->

                            <!-- BEGIN: Form Keterangan Paket -->
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="ket_paket">Keterangan</label>
                                    <textarea
                                        class="form-control <?= ($validation->hasError('ket_paket')) ? 'is-invalid' : ''; ?>"
                                        id="ket_paket" name="ket_paket" rows="3"
                                        placeholder="Contoh : 1 x 2 Jam MT / 3 x 2 Jam MT + 1 x 2 Jam AT"><?= old('ket_paket'); ?></textarea>
                                    <div id="ket_paket" class="invalid-feedback">
                                        <?= $validation->getError('ket_paket'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Keterangan Paket -->

                            <!-- BEGIN: Tombol Simpan dan Batal -->
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary ">Simpan</button>
                                <a href="<?= site_url('admin/paket'); ?>" class="btn btn-danger ">Batal</a>
                            </div>
                            <!-- END: Tombol Simpan dan Batal -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Judul Halaman (Content) -->

<!-- BEGIN: Isi Halaman (Content) -->
<!-- <div class="content">
    <h2 class="content-heading">Test Subtitle</h2>
    <p>Your content..</p>
</div> -->

<!-- END: Isi Halaman (Content) -->
<!-- END: Section [Content] -->

<!-- BEGIN: Custom File (JavaScript)-->
<?= $this->section('pageScript'); ?>>

<?= $this->endSection(); ?>
<!-- END: Custom File (JavaScript)-->
<!-- Page JS Plugins -->
<script src="<?= base_url(); ?>/backend/js/plugins/select2/js/select2.full.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/plugins/jquery-validation/additional-methods.js"></script>

<!-- Page JS Helpers (Select2 plugin) -->
<script>
Dashmix.helpersOnLoad(['jq-select2']);
</script>

<!-- Page JS Code -->
<script src="<?= base_url(); ?>/backend/js/pages/be_forms_validation.min.js"></script>
<?= $this->endSection(); ?>
<!-- END: Halaman [Paket] -->