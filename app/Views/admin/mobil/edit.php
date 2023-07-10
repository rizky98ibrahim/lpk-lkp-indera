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
                    <form id="mobil-form" method="post" action="/admin/mobil/update/<?= $mobil['id_mobil'] ?>"
                        enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="slug_mobil" value="<?= $mobil['slug_mobil']; ?>">
                        <input type="hidden" name="fotoLama" value="<?= $mobil['foto_mobil']; ?>">
                        <div class="row">
                            <!-- BEGIN: Form Nama Mobil -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nama_mobil">Nama Mobil</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('nama_mobil')) ? 'is-invalid' : ''; ?>"
                                        id="nama_mobil" name="nama_mobil" aria-describedby="nama_mobil"
                                        placeholder="Masukan nama mobil" autofocus
                                        value="<?= (old('nama_mobil')) ? old('nama_mobil') : $mobil['nama_mobil']; ?>">
                                    <div id="nama_mobil" class="invalid-feedback">
                                        <?= $validation->getError('nama_mobil'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Nama Mobil -->

                            <!-- BEGIN: Form Merek Mobil -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="merek_mobil">Merek Mobil</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('merek_mobil')) ? 'is-invalid' : ''; ?>"
                                        id="merek_mobil" name="merek_mobil" aria-describedby="merek_mobil"
                                        placeholder="Masukan merek mobil (Suzuki, Daihatsu, dll)"
                                        value="<?= (old('merek_mobil')) ? old('merek_mobil') : $mobil['merek_mobil']; ?>">
                                    <div id="merek_mobil" class="invalid-feedback">
                                        <?= $validation->getError('merek_mobil'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Merek Mobil -->

                            <!-- BEGIN: Form Jenis Mobil -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="jenis_mobil">Transmisi Mobil</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('jenis_mobil')) ? 'is-invalid' : ''; ?>"
                                        id="jenis_mobil" name="jenis_mobil" aria-describedby="jenis_mobil"
                                        placeholder="Masukan transmisi mobil (Matic / Manual)"
                                        value="<?= (old('jenis_mobil')) ? old('jenis_mobil') : $mobil['jenis_mobil']; ?>">
                                    <div id="jenis_mobil" class="invalid-feedback">
                                        <?= $validation->getError('jenis_mobil'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Jenis Mobil -->

                            <!-- BEGIN: Form Nopol Mobil -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nopol_mobil">Nopol Mobil</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('nopol_mobil')) ? 'is-invalid' : ''; ?> "
                                        id="nopol_mobil" name="nopol_mobil" aria-describedby="nopol_mobil"
                                        placeholder="Masukan nopol mobil (AA 9275 WD)"
                                        value="<?= (old('nopol_mobil')) ? old('nopol_mobil') : $mobil['nopol_mobil']; ?>">
                                    <div id="nopol_mobil" class="invalid-feedback">
                                        <?= $validation->getError('nopol_mobil'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Nopol Mobil -->

                            <!-- BEGIN: Form Tahun Mobil -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="tahun_mobil">Tahun Mobil</label>
                                    <input type="date"
                                        class="form-control <?= ($validation->hasError('tahun_mobil')) ? 'is-invalid' : ''; ?>"
                                        id="tahun_mobil" name="tahun_mobil" aria-describedby="tahun_mobil"
                                        placeholder="Masukan tahun mobil"
                                        value="<?= (old('tahun_mobil')) ? old('tahun_mobil') : $mobil['tahun_mobil']; ?>">
                                    <div id="tahun_mobil" class="invalid-feedback">
                                        <?= $validation->getError('tahun_mobil'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Tahun Mobil -->

                            <!-- BEGIN: Form Warna Mobil -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="warna_mobil">Warna Mobil</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('warna_mobil')) ? 'is-invalid' : ''; ?>"
                                        id="warna_mobil" name="warna_mobil" aria-describedby="warna_mobil"
                                        placeholder="Masukan Warna mobil"
                                        value="<?= (old('warna_mobil')) ? old('warna_mobil') : $mobil['warna_mobil']; ?>">
                                    <div id="warna_mobil" class="invalid-feedback">
                                        <?= $validation->getError('warna_mobil'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Warna Mobil -->

                            <!-- BEGIN: Form Keterangan Mobil -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="ket_mobil">Keterangan</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('ket_mobil')) ? 'is-invalid' : ''; ?>"
                                        id="ket_mobil" name="ket_mobil" aria-describedby="ket_mobil"
                                        placeholder="Masukan Keterangan mobil"
                                        value="<?= (old('ket_mobil')) ? old('ket_mobil') : $mobil['ket_mobil']; ?>">
                                    <div id="ket_mobil" class="invalid-feedback">
                                        <?= $validation->getError('ket_mobil'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Keterangan Mobil -->

                            <!-- BEGIN: Form Foto Mobil -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="foto_mobil" class="form-label label_mobil">Foto Mobil</label>
                                    <input
                                        class="form-control <?= ($validation->hasError('foto_mobil')) ? 'is-invalid' : ''; ?>"
                                        type="file" id="foto_mobil" name="foto_mobil" onchange="previewImg()">
                                    <div id="foto_mobil" class="invalid-feedback">
                                        <?= $validation->getError('foto_mobil'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Foto Mobil -->

                            <!-- BEGIN: Tombol Simpan dan Batal -->
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary ">Simpan</button>
                                <a href="<?= site_url('admin/mobil'); ?>" class="btn btn-danger ">Batal</a>
                            </div>
                            <!-- END: Tombol Simpan dan Batal -->

                            <!-- BEGIN: Form Preview Mobil -->
                            <div class="col-md-6 mb-3">
                                <img src="/backend/media/mobil/<?= $mobil['foto_mobil']; ?>"
                                    class="img-thumbnail img-preview">
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
<?= $this->section('pageScript'); ?>

<?= $this->endSection(); ?>
<!-- END: Custom File (JavaScript)-->

<!-- Page JS Code -->
<script src="<?= base_url(); ?>/backend/js/pages/preview-mobil.js"></script>
<?= $this->endSection(); ?>
<!-- END: Halaman [Mobil Edit] -->