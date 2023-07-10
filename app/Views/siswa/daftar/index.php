<!-- BEGIN: Halaman [Formulir Pendaftaran] -->
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
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Formulir Pendaftaran</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Formulir Pendaftaran</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<!-- END: Judul Halaman (Content) -->

<!-- BEGIN: Isi Halaman (Content) -->
<div class="content">
    <div class="block block-themed">
        <div class="block-header block-header-default">
            <h3 class="block-title">Formulir Pendaftaran Siswa</h3>
            <div class="block-options">
                <a href="<?= site_url('auth'); ?>" class="btn btn-sm btn-light">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12">
                    <form id="instruktur-form" method="post" action="<?= site_url('siswa/daftar/save'); ?>"
                        enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" value="<?= user()->username; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" value="<?= user()->email; ?>" disabled>
                                </div>
                            </div>
                            <!-- BEGIN: Form Nama Lengkap-->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>"
                                        id="nama_lengkap" name="nama_lengkap" aria-describedby="nama_lengkap"
                                        placeholder="Masukan nama lengkap" autofocus
                                        value="<?= old('nama_lengkap'); ?>">
                                    <div id="nama_lengkap" class="invalid-feedback">
                                        <?= $validation->getError('nama_lengkap'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Nama Lengkap-->

                            <!-- BEGIN: Form NIK-->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nik">NIK</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>"
                                        id="nik" name="nik" aria-describedby="nik" placeholder="Masukan NIK"
                                        value="<?= old('nik'); ?>">
                                    <div id="nik" class="invalid-feedback">
                                        <?= $validation->getError('nik'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form NIK-->

                            <!-- BEGIN: Form Nama Ayah -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nama_ayah">Nama Ayah</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid' : ''; ?>"
                                        id="nama_ayah" name="nama_ayah" aria-describedby="nama_ayah"
                                        placeholder="Masukan nama ayah" value="<?= old('nama_ayah'); ?>">
                                    <div id="nama_ayah" class="invalid-feedback">
                                        <?= $validation->getError('nama_ayah'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Nama Ayah -->

                            <!-- BEGIN: Form Nama Ibu -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nama_ibu">Nama Ibu</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid' : ''; ?>"
                                        id="nama_ibu" name="nama_ibu" aria-describedby="nama_ibu"
                                        placeholder="Masukan nama ibu" value="<?= old('nama_ibu'); ?>">
                                    <div id="nama_ibu" class="invalid-feedback">
                                        <?= $validation->getError('nama_ibu'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Nama Ibu -->

                            <!-- BEGIN: Form Jenis Kelamin -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <select
                                        class="form-select <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>"
                                        id="jenis_kelamin" name="jenis_kelamin">
                                        <option value="" disabled selected>Pilih..</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    <div id="nama_ibu" class="invalid-feedback">
                                        <?= $validation->getError('jenis_kelamin'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Jenis Kelamin -->

                            <!-- BEGIN: Form Nomor Telepon -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="telepon">Nomor telepon</label>
                                    <input type="tel"
                                        class="form-control <?= ($validation->hasError('telepon')) ? 'is-invalid' : ''; ?>"
                                        id="telepon" name="telepon" aria-describedby="telepon"
                                        placeholder="Masukan nomor telepon" value="<?= old('telepon'); ?>">
                                    <div id="telepon" class="invalid-feedback">
                                        <?= $validation->getError('telepon'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Nomor Telepon -->

                            <!-- BEGIN: Form Pendidikan -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="pendidikan">Pendidikan</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('pendidikan')) ? 'is-invalid' : ''; ?>"
                                        id="pendidikan" name="pendidikan" aria-describedby="pendidikan"
                                        placeholder="Masukan pendidikan terakhir" value="<?= old('pendidikan'); ?>">
                                    <div id="pendidikan" class="invalid-feedback">
                                        <?= $validation->getError('pendidikan'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Pendidikan -->

                            <!-- BEGIN: Form Pekerjaan -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="pekerjaan">Pekerjaan</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>"
                                        id="pekerjaan" name="pekerjaan" aria-describedby="pekerjaan"
                                        placeholder="Masukan pekerjaan sekarang" value="<?= old('pekerjaan'); ?>">
                                    <div id="pekerjaan" class="invalid-feedback">
                                        <?= $validation->getError('pekerjaan'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Pekerjaan -->

                            <!-- BEGIN: Form Tempat Lahir -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>"
                                        id="tempat_lahir" name="tempat_lahir" aria-describedby="tempat_lahir"
                                        placeholder="Masukan tempat lahir" value="<?= old('tempat_lahir'); ?>">
                                    <div id="tempat_lahir" class="invalid-feedback">
                                        <?= $validation->getError('tempat_lahir'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Tempat Lahir -->

                            <!-- BEGIN: Form Tanggal Lahir -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date"
                                        class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>"
                                        id="tanggal_lahir" name="tanggal_lahir" aria-describedby="tanggal_lahir"
                                        placeholder="Masukan tanggal" value="<?= old('tanggal_lahir'); ?>">
                                    <div id="tanggal_lahir" class="invalid-feedback">
                                        <?= $validation->getError('tanggal_lahir'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Tanggal Lahir -->

                            <!-- BEGIN: Form Alamat -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <textarea
                                        class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>"
                                        id="alamat" name="alamat" rows="3"
                                        placeholder="Masukan alamat lengkap"><?= old('alamat'); ?></textarea>
                                    <div id="alamat" class="invalid-feedback">
                                        <?= $validation->getError('alamat'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Alamat -->

                            <!-- BEGIN: Form Foto Siswa -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="foto_siswa" class="form-label label_siswa">Foto</label>
                                    <input
                                        class="form-control <?= ($validation->hasError('foto_siswa')) ? 'is-invalid' : ''; ?>"
                                        type="file" id="foto_siswa" name="foto_siswa" onchange="previewImg()">
                                    <div id="foto_siswa" class="invalid-feedback">
                                        <?= $validation->getError('foto_siswa'); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Form Foto Instruktur -->

                            <!-- BEGIN: Form Preview Instruktur -->
                            <div class="col-md-2 my-1">
                                <img src="/backend/media/siswa/default.png" class="img-thumbnail img-preview">
                            </div>
                            <!-- END: Form Preview Instruktur -->

                            <!-- BEGIN: Tombol Simpan dan Batal -->
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary ">Simpan</button>
                                <a href="<?= site_url('auth'); ?>" class="btn btn-danger ">Batal</a>
                            </div>
                            <!-- END: Tombol Simpan dan Batal -->
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
<script src="<?= base_url(); ?>/backend/js/pages/preview-siswa.js"></script>

<?= $this->endSection(); ?>
<!-- END: Custom File (JavaScript)-->

<?= $this->endSection(); ?>
<!-- END: Halaman  [Formulir Pendaftaran]-->