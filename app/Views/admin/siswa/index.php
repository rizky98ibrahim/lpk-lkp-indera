<!-- BEGIN: Halaman [Data Siswa] -->
<?= $this->extend('backend/layout'); ?>

<!-- BEGIN: Custom File (CSS)-->
<?= $this->section('pageStyles'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/datatables-btn-bs5/css/buttons.bootstrap5.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/datatables-bs5/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/sweetalert2/sweetalert2.min.css">
<?= $this->endSection(); ?>
<!-- END: Custom File (CSS)-->

<!-- BEGIN: Section [Content Data Siswa] -->
<?= $this->section('content'); ?>

<!-- BEGIN: Judul Halaman (Content) -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Data Siswa</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END: Judul Halaman (Content) -->

<!-- BEGIN: Isi Halaman Content (Data Siswa) -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h2 class="block-title">Data Siswa</h2>
        </div>

        <div class="block-content block-content-full">
            <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
            <table class=" table table-hover table-responsive table-vcenter table-siswa">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell text-center">#</th>
                        <th class="d-none d-sm-table-cell">NIK</th>
                        <th class="d-none d-sm-table-cell">Nama Siswa</th>
                        <th class="d-none d-sm-table-cell">Jenis Kelamin</th>
                        <th class="d-none d-sm-table-cell">Tempat, Tanggal Lahir</th>
                        <th class="d-none d-sm-table-cell">Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 0;
                    foreach ($siswa as $key => $value) :

                        $nomor++;
                    ?>
                    <tr>
                        <td class="d-none d-sm-table-cell text-center">
                            <?= $nomor; ?>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <strong>
                                <?= $value->nik_siswa; ?>
                            </strong>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?= $value->nama_siswa; ?>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?= $value->jekel_siswa; ?>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?= $value->tmplahir_siswa; ?>, <?= $value->tgllahir_siswa; ?>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?= $value->tlp_siswa; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END: Isi Halaman Content (Data Siswa) -->
<!-- END: Section [Content Data Siswa] -->

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
<script src="<?= base_url(); ?>/backend/js/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/pages/init-siswa.js"></script>
<script>
$(document).ready(function() {
    <?php if (session()->getFlashdata('pesan')) : ?>
    Swal.fire({
        title: '<?= session()->getFlashdata('pesan'); ?>',
        text: '<?= session()->getFlashdata('status_text'); ?>',
        icon: '<?= session()->getFlashdata('status_icon'); ?>',
    })
    <?php endif; ?>
});
$(document).on('click', '#btn-hapus', function(e) {
    e.preventDefault();
    var form = $(this).parents('form');

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: 'Data Siswa akan dihapus!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal',
    }).then(function(isConfirm) {
        if (isConfirm) {
            form.submit();
            <?php if (session()->getFlashdata('pesan')) : ?>
            Swal.fire({
                title: '<?= session()->getFlashdata('pesan'); ?>',
                text: '<?= session()->getFlashdata('status_text'); ?>',
                icon: '<?= session()->getFlashdata('status_icon'); ?>',
            })
            <?php endif; ?>
        }
    });
});
</script>
<?= $this->endSection(); ?>
<!-- END: Custom File (JavaScript)-->

<?= $this->endSection(); ?>
<!-- END: Halaman [Instruktur] -->