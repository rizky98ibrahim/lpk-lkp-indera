<!-- BEGIN: Halaman [My Profile] -->
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
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">My Profile</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<!-- END: Judul Halaman (Content) -->

<!-- BEGIN: Isi Halaman (Content) -->
<div class="content">
    <div class="col-md-12">
        <div class="block block-bordered block-themed">
            <div class="block-header block-header-default">
                <h2 class="block-title">Detail Pengguna</h2>
                <div class="block-options">
                    <a href="<?= base_url('auth'); ?>" class="btn btn-sm btn-light">
                        <i class="fas fa-arrow-left me-1"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="block-content">
                <?php foreach ($siswa as $key => $value) : ?>

                <div class="row">
                    <div class="col-md-5">
                        <!-- Card #1 -->
                        <div class="block block-rounded block-bordered">
                            <div class="block-content block block-rounded mb-0">
                                <div class="py-3 text-center">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb"
                                        src="<?= base_url(); ?>/backend/media/siswa/<?= $value->foto_siswa; ?>" alt="">
                                    <h3 class="fw-semibold text-dark my-2"><?= $value->nama_siswa; ?></h3>
                                    <h4 class="fs-sm text-muted mb-3">
                                    </h4>
                                    <div
                                        class="d-inline-block px-3 py-2 rounded-pill fs-sm fw-semibold text-light bg-primary">
                                        <?= user()->username; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm text-center bg-body-light">
                                <span class="fs-sm text-dark">Akun dibuat : <?= user()->created_at; ?></span>


                            </div>
                        </div>
                        <!-- END Card #1 -->
                    </div>
                    <div class="col-md-7">
                        <!-- Card #1 -->
                        <div class="block block block-rounded mb-0">
                            <ul class="list-group push">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Email :
                                    <span class="text-muted"><?= user()->email; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    NIK :
                                    <span class="text-muted"><?= $value->nik_siswa ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Telepon :
                                    <span class="text-muted"><?= $value->tlp_siswa ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Jenis Kelamin :
                                    <span class="text-muted"><?= $value->jekel_siswa; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Tempat, Tanggal Lahir :
                                    <span class="text-muted"><?= $value->tmplahir_siswa; ?>,
                                        <?= $value->tgllahir_siswa; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Alamat :
                                    <span class="text-muted text-end w-75"><?= $value->alamat_siswa; ?></span>
                                </li>
                            </ul>
                            <?php endforeach; ?>
                            <!-- END Card #1 -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Footer Content -->
            <!-- <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                <a href="<?= base_url('profile/edit'); ?>" class="btn btn-sm btn-warning">
                    <i class="fas fa-edit me-1"></i> Ubah Detail
                </a>
            </div> -->
            <!-- END : Footer Content -->
        </div>
    </div>
</div>

<!-- END: Isi Halaman (Content) -->
<!-- END: Section [Content] -->

<!-- BEGIN: Custom File (JavaScript)-->
<?= $this->section('pageScript'); ?>>

<?= $this->endSection(); ?>
<!-- END: Custom File (JavaScript)-->

<?= $this->endSection(); ?>
<!-- END: Halaman  [My Profile]-->