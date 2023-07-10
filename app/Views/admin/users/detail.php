<!-- BEGIN: Halaman [Paket] -->
<?= $this->extend('backend/layout'); ?>

<!-- BEGIN: Custom File (CSS)-->
<?= $this->section('pageStyles'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/datatables-btn-bs5/css/buttons.bootstrap5.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/datatables-bs5/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/sweetalert2/sweetalert2.min.css">
<?= $this->endSection(); ?>
<!-- END: Custom File (CSS)-->

<!-- END: Section [Content] -->
<?= $this->section('content'); ?>

<!-- BEGIN: Judul Halaman (Content) -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Detail Pengguna</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('/admin/userlist'); ?>">Daftar Pengguna</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="content">
    <div class="col-md-12">
        <div class="block block-bordered block-themed">
            <div class="block-header block-header-default">
                <h2 class="block-title">Detail Pengguna</h2>
                <div class="block-options">
                    <a href="<?= base_url('admin/userlist'); ?>" class="btn btn-sm btn-light">
                        <i class="fas fa-arrow-left me-1"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Card #1 -->
                        <div class="block block-rounded block-bordered">
                            <div class="block-content block block-rounded h-100 mb-0">
                                <div class="py-3 text-center">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb"
                                        src="<?= base_url(); ?>/backend/media/avatars/<?= $user->avatar; ?>" alt="">
                                    <h3 class="fw-semibold text-dark my-2"><?= $user->nama; ?></h3>
                                    <h4 class="fs-sm text-muted mb-3">
                                        <?= $user->username; ?>
                                    </h4>
                                    <div
                                        class="d-inline-block px-3 py-2 rounded-pill fs-sm fw-semibold text-light bg-<?= ($user->description == 'Admin') ? 'primary' : (($user->description == 'Siswa') ? 'success' : 'warning'); ?>">
                                        <?= $user->description; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm text-center bg-body-light">
                                <span class="fs-sm text-muted">Akun dibuat : <?= $user->created_at; ?></span>
                            </div>
                        </div>
                        <!-- END Card #1 -->
                    </div>
                    <div class="col-md-8">
                        <!-- Card #1 -->
                        <div class="block block block-rounded h-100 mb-0">
                            <ul class="list-group push">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Nama Lengkap :
                                    <span class="text-muted"><?= $user->nama; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Email :
                                    <span class="text-muted"><?= $user->email; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Telepon :
                                    <span class="text-muted"><?= $user->telepon; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Jenis Kelamin :
                                    <span class="text-muted"><?= $user->jenis_kelamin; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Tempat, Tanggal Lahir :
                                    <span class="text-muted"><?= $user->tempat_lahir; ?>,
                                        <?= $user->tanggal_lahir; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Alamat :
                                    <span class="text-muted text-end w-75"><?= $user->alamat; ?></span>
                                </li>
                            </ul>
                            <!-- END Card #1 -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                <a href="<?= base_url('admin/userlist'); ?>" class="btn btn-sm btn-warning">
                    <i class="fas fa-edit me-1"></i> Ubah Data
                </a>
            </div> -->
        </div>
    </div>
</div>
<!-- END: Section [Content] -->

<!-- BEGIN: Custom File (JavaScript)-->
<?= $this->section('pageScript'); ?>

<script src="<?= base_url(); ?>/backend/js/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/pages/init-users.js"></script>

<?= $this->endSection(); ?>
<!-- END: Custom File (JavaScript)-->

<?= $this->endSection(); ?>
<!-- END: Halaman [Paket] -->