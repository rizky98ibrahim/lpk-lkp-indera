<!-- BEGIN: Halaman [Paket] -->
<?= $this->extend('backend/layout'); ?>

<!-- BEGIN: Custom File (CSS)-->
<?= $this->section('pageStyles'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/datatables-btn-bs5/css/buttons.bootstrap5.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/datatables-bs5/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/sweetalert2/sweetalert2.min.css">
<?= $this->endSection(); ?>
<!-- END: Custom File (CSS)-->

<!-- BEGIN: Section [Content Data Paket] -->
<?= $this->section('content'); ?>

<!-- BEGIN: Judul Halaman Content (Data Paket) -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Data Paket</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Paket</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END: Judul Halaman Content (Data Paket) -->

<!-- BEGIN: Isi Halaman Content (Data Paket) -->
<div class="content">
    <div class="block block-rounded block-themed">
        <div class="block-header block-header-default">
            <h2 class="block-title">Data Paket</h2>
            <!-- <div class="block-options">
                <a href="/paket/tambah" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus me-1"></i> Tambah Data
                </a>
            </div> -->
        </div>

        <div class="block-content block-content-full">
            <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
            <table class=" table table-hover table-responsive table-vcenter siswa-paket">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell text-center ">#</th>
                        <th class="d-none d-sm-table-cell">Nama Paket</th>
                        <th class="d-none d-sm-table-cell">Kategori</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">Harga</th>
                        <th class="d-none d-sm-table-cell">Durasi</th>
                        <th class="d-none d-sm-table-cell text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 0;
                    foreach ($paket as $pkt) :
                        $nomor++;
                    ?>
                    <tr>
                        <td class="text-center"><?= $nomor; ?></td>
                        <td class="fw-semibold">
                            <a href="/siswa/paket/detail/<?= $pkt['slug_paket']; ?>"><?= $pkt['nama_paket']; ?></a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?= $pkt['jenis_paket']; ?>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <strong>
                                Rp<?php echo number_format($pkt['harga_paket'], 2, ',', '.'); ?>
                            </strong>
                        </td>
                        <td>
                            <?= $pkt['durasi_paket']; ?>
                        </td>
                        <td class="text-center">
                            <a href="/siswa/paket/detail/<?= $pkt['slug_paket']; ?>"
                                class="btn btn-sm btn-outline-primary mx-1" title="Lihat">
                                <i class="fas fa-eye"></i> Lihat
                            </a>
                            <a href="https://wa.me/6281225539991?text=Saya%20tertarik%20dengan%20paket%20<?= $pkt['slug_paket']; ?>%20yang%20ditawarkan"
                                class="btn btn-sm btn-outline-warning mx-1" target="_blank" title="Pilih">
                                <i class="fas fa-thumbs-up"></i> Pilih
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END: Isi Halaman Content (Data Paket) -->

<!-- END: Section [Content Data Paket] -->

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
<script src="<?= base_url(); ?>/backend/js/pages/siswa-paket.js"></script>
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
        text: 'Paket akan dihapus!',
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
<!-- END: Halaman [Paket] -->