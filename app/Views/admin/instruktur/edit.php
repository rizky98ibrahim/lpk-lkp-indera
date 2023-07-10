<!-- BEGIN: Halaman [Mobil] -->
<?= $this->extend('backend/layout'); ?>

<!-- BEGIN: Custom File (CSS)-->
<?= $this->section('pageStyles'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/flatpickr/flatpickr.min.css">
<?= $this->endSection(); ?>
<!-- END: Custom File (CSS)-->

<!-- END: Section [Content] -->
<?= $this->section('content'); ?>

<!-- BEGIN: Judul Halaman Content (Ubah Instruktur) -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Ubah Data Instruktur</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('admin/instruktur'); ?>">Data Instruktur</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Ubah</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Judul Halaman Content (Ubah Instruktur) -->

<!-- BEGIN: Isi Halaman Content (Ubah Instruktur) -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Form Tambah Data Instruktur</h3>
            <div class="block-options">
                <a href="/admin/instruktur/" class="btn btn-sm btn-danger">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12">
                    <form id="instruktur-form" method="post"
                        action="/admin/instruktur/update/<?= $instruktur['id_instruktur'] ?>"
                        enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="slug_instruktur" value="<?= $instruktur['slug_instruktur']; ?>">
                        <input type="hidden" name="fotoLama" value="<?= $instruktur['foto_instruktur']; ?>">
                        <div class="row">
                            <!-- BEGIN: Form NIK Instruktur -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nik_instruktur">NIK Instruktur</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('nik_instruktur')) ? 'is-invalid' : ''; ?>"
                                        id="nik_instruktur" name="nik_instruktur" aria-describedby="nik_instruktur"
                                        placeholder="Masukan NIK instruktur" autofocus
                                        value="<?= (old('nik_instruktur')) ? old('nik_instruktur') : $instruktur['nik_instruktur']; ?>">
                                    <div id="nik_instruktur" class="invalid-feedback">
                                        <?= $validation->getError('nik_instruktur'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form NIK Instruktur -->

                            <!-- BEGIN: Form Nama Instruktur -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nama_instruktur">Nama Instruktur</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('nama_instruktur')) ? 'is-invalid' : ''; ?>"
                                        id="nama_instruktur" name="nama_instruktur" aria-describedby="nama_instruktur"
                                        placeholder="Masukan nama instruktur"
                                        value="<?= (old('nama_instruktur')) ? old('nama_instruktur') : $instruktur['nama_instruktur']; ?>">
                                    <div id="nama_instruktur" class="invalid-feedback">
                                        <?= $validation->getError('nama_instruktur'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Nama Instruktur -->

                            <!-- BEGIN: Form Telepon Instruktur -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="tlp_instruktur">Telepon Instruktur</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('tlp_instruktur')) ? 'is-invalid' : ''; ?>"
                                        id="tlp_instruktur" name="tlp_instruktur" aria-describedby="tlp_instruktur"
                                        placeholder="Masukan telepon instruktur"
                                        value="<?= (old('tlp_instruktur')) ? old('tlp_instruktur') : $instruktur['tlp_instruktur']; ?>">
                                    <div id="tlp_instruktur" class="invalid-feedback">
                                        <?= $validation->getError('tlp_instruktur'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Telepon Instruktur -->

                            <!-- BEGIN: Form Email Instruktur -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="email_instruktur">Email Instruktur</label>
                                    <input type="email"
                                        class="form-control <?= ($validation->hasError('email_instruktur')) ? 'is-invalid' : ''; ?>"
                                        id="email_instruktur" name="email_instruktur"
                                        aria-describedby="email_instruktur" placeholder="Masukan telepon instruktur"
                                        value="<?= (old('email_instruktur')) ? old('email_instruktur') : $instruktur['email_instruktur']; ?>">
                                    <div id="email_instruktur" class="invalid-feedback">
                                        <?= $validation->getError('email_instruktur'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Telepon Instruktur -->

                            <!-- BEGIN: Form Tempat Lahir -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="tlp_instruktur">Tempat Lahir</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('tmplahir_instruktur')) ? 'is-invalid' : ''; ?>"
                                        id="tmplahir_instruktur" name="tmplahir_instruktur"
                                        aria-describedby="tmplahir_instruktur" placeholder="Masukan Tempat lahir"
                                        value="<?= (old('tmplahir_instruktur')) ? old('tmplahir_instruktur') : $instruktur['tmplahir_instruktur']; ?>">
                                    <div id="tmplahir_instruktur" class="invalid-feedback">
                                        <?= $validation->getError('tmplahir_instruktur'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Tempat Lahir -->

                            <!-- BEGIN: Form Tanggal Lahir Instruktur -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="tgllahir_instruktur">Tanggal Lahir</label>
                                    <input type="date"
                                        class="form-control <?= ($validation->hasError('tgllahir_instruktur')) ? 'is-invalid' : ''; ?>"
                                        id="tgllahir_instruktur" name="tgllahir_instruktur"
                                        aria-describedby="tgllahir_instruktur" placeholder="Masukan tanggal Lahir"
                                        value="<?= (old('tgllahir_instruktur')) ? old('tgllahir_instruktur') : $instruktur['tgllahir_instruktur']; ?>">
                                    <div id="tgllahir_instruktur" class="invalid-feedback">
                                        <?= $validation->getError('tgllahir_instruktur'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- BEGIN: Form Tanggal Lahir Instruktur -->

                            <!-- BEGIN: Form Status Instruktur -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="tlp_instruktur">Status Instruktur</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('status_instruktur')) ? 'is-invalid' : ''; ?>"
                                        id="status_instruktur" name="status_instruktur"
                                        aria-describedby="status_instruktur" placeholder="Masukan telepon instruktur"
                                        value="<?= (old('status_instruktur')) ? old('status_instruktur') : $instruktur['status_instruktur']; ?>">
                                    <div id="status_instruktur" class="invalid-feedback">
                                        <?= $validation->getError('status_instruktur'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Status Instruktur -->

                            <!-- BEGIN: Form Foto Instruktur -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="foto_instruktur" class="form-label label_instruktur">Foto
                                        Instruktur</label>
                                    <input
                                        class="form-control <?= ($validation->hasError('foto_instruktur')) ? 'is-invalid' : ''; ?>"
                                        type="file" id="foto_instruktur" name="foto_instruktur" onchange="previewImg()">
                                    <div id="foto_instruktur" class="invalid-feedback">
                                        <?= $validation->getError('foto_instruktur'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Foto Instruktur -->

                            <!-- BEGIN: Form Alamat Instruktur -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="alamat_instruktur">Alamat Instruktur</label>
                                    <textarea
                                        class="form-control <?= ($validation->hasError('alamat_instruktur')) ? 'is-invalid' : ''; ?>"
                                        id="alamat_instruktur" name="alamat_instruktur" rows="3"
                                        placeholder="Masukan alamat instruktur"><?= (old('alamat_instruktur')) ? old('alamat_instruktur') : $instruktur['alamat_instruktur']; ?></textarea>
                                    <div id="alamat_instruktur" class="invalid-feedback">
                                        <?= $validation->getError('alamat_instruktur'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Alamat Instruktur -->

                            <!-- BEGIN: Form Preview Instruktur -->
                            <div class="col-md-2 my-1">
                                <img src="/backend/media/instruktur/<?= $instruktur['foto_instruktur']; ?>"
                                    class="img-thumbnail img-preview">
                            </div>
                            <!-- END: Form Preview Instruktur -->

                            <!-- BEGIN: Tombol Simpan dan Batal -->
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary ">Simpan</button>
                                <a href="<?= site_url('admin/instruktur'); ?>" class="btn btn-danger ">Batal</a>
                            </div>
                            <!-- END: Tombol Simpan dan Batal -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END Isi Halaman Content (Tambah Instruktur) -->

        <!-- END: Section [Content] -->

        <!-- BEGIN: Custom File (JavaScript)-->
        <?= $this->section('pageScript'); ?>>
        <script src="<?= base_url(); ?>/backend/js/pages/preview-instruktur.js"></script>

        <?= $this->endSection(); ?>
        <!-- END: Custom File (JavaScript)-->

        <?= $this->endSection(); ?>
        <!-- END: Halaman [Mobil] -->