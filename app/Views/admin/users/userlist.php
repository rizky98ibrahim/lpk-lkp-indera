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
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Daftar Pengguna</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Pengguna</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="content">
    <div class="col-md-12">
        <div class="block block-bordered block-themed">
            <div class="block-header block-header-default">
                <h2 class="block-title">Daftar Pengguna</h2>
                <div class="block-options">
                    <a href="javascript:void(0)" class="btn btn-sm btn-light">
                        <i class="fas fa-plus me-1"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="block-content block-content-full">
                <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
                <table class="table table-bordered table-hover table-striped table-vcenter  table-users">
                    <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell">#</th>
                            <th class="d-none d-sm-table-cell">Nama</th>
                            <th class="d-none d-sm-table-cell">Email</th>
                            <th class="d-none d-sm-table-cell">Telepon</th>
                            <th class="d-none d-sm-table-cell text-center">Role</th>
                            <th class="d-none d-sm-table-cell text-center">Aksi</th>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $user) : ?>
                        <tr>
                            <!-- Nomer -->
                            <td class="d-none d-sm-table-cell"><?= $i++; ?></td>

                            <!-- Nama Lengkap -->
                            <td class="d-none d-sm-table-cell">
                                <a href="<?= base_url('admin/userlist/' . $user->userid); ?>"><?= $user->nama; ?></a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <?= $user->email; ?>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <?= $user->telepon; ?>
                            </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <span
                                    class="badge bg-<?= ($user->description == 'Admin') ? 'primary' : (($user->description == 'Siswa') ? 'success' : 'warning'); ?>"><?= $user->description; ?></span>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('/admin/userlist/' . $user->userid); ?>"
                                    class="btn btn-sm btn-outline-primary mx-1" title="Detail">
                                    <i class="fas fa-eye"></i> Lihat Detail
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                Footer content..
            </div> -->
        </div>
    </div>
</div>
<!-- END: Section [Content] -->

<!-- BEGIN: Custom File (JavaScript)-->
<?= $this->section('pageScript'); ?>>
<script src="<?= base_url(); ?>/backend/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/plugins/datatables-btn/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/plugins/datatables-btn-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/plugins/datatables-btn-jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/plugins/datatables-btn-pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/plugins/datatables-btn-pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>/backend/js/plugins/datatables-btn/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/plugins/datatables-btn/buttons.html5.min.js"></script>

<!-- Page JS Code -->
<script src="<?= base_url(); ?>/backend/js/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/pages/init-users.js"></script>

<?= $this->endSection(); ?>
<!-- END: Custom File (JavaScript)-->

<?= $this->endSection(); ?>
<!-- END: Halaman [Paket] -->