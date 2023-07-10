<!-- BEGIN: Halaman [Mobil] -->
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
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Data Mobil</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Mobil</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content">
    <div class="block block-themed">
        <div class="block-header block-header-default">
            <h2 class="block-title">Data Mobil</h2>
        </div>

        <div class="block-content block-content-full">
            <!-- <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <p class="mb-0"><?= session()->getFlashdata('pesan'); ?></p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?> -->

            <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
            <table class=" table table-hover table-responsive table-vcenter siswa-mobil">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell text-center ">#</th>
                        <th class="d-none d-sm-table-cell">Nama Mobil</th>
                        <th class="d-none d-sm-table-cell">Merek</th>
                        <th class="d-none d-sm-table-cell">Transmisi</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">TNKB</th>
                        <th class="d-none d-sm-table-cell">Tahun</th>
                        <th class="d-none d-sm-table-cell text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 0;
                    foreach ($mobil as $mbl) :
                        $nomor++;
                    ?>
                    <tr>
                        <td class="text-center"><?= $nomor; ?></td>
                        <td class="fw-semibold">
                            <a href="/data-mobil/<?= $mbl['slug_mobil']; ?>"><?= $mbl['nama_mobil']; ?></a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?= $mbl['merek_mobil']; ?>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?= $mbl['jenis_mobil']; ?>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <strong>
                                <?= $mbl['nopol_mobil']; ?>
                            </strong>
                        </td>
                        <td>
                            <?= $mbl['tahun_mobil']; ?>
                        </td>
                        <td class="text-center">

                            <a href="/data-mobil/<?= $mbl['slug_mobil']; ?>" class="btn btn-sm btn-outline-primary mx-1"
                                title="Detail">
                                <i class="fas fa-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END: Judul Halaman (Content) -->
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
<script src="<?= base_url(); ?>/backend/js/pages/siswa-mobil.js"></script>
<script src="<?= base_url(); ?>/backend/js/pages/init-preview.js"></script>
<?= $this->endSection(); ?>
<!-- END: Custom File (JavaScript)-->

<?= $this->endSection(); ?>
<!-- END: Halaman [Mobil] -->