<!-- BEGIN: Halaman [Mobil] -->
<?= $this->extend('backend/layout'); ?>

<!-- BEGIN: Custom File (CSS)-->
<?= $this->section('pageStyles'); ?>
<link rel="stylesheet" href="<?= base_url(); ?>/backend/js/plugins/magnific-popup/magnific-popup.css">
<?= $this->endSection(); ?>
<!-- END: Custom File (CSS)-->

<!-- END: Section [Content] -->
<?= $this->section('content'); ?>

<!-- BEGIN: Judul Halaman (Content) -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Detail Data Mobil</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('auth'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('admin/mobil'); ?>">Data Mobil</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Detail Data Mobil</h3>
                    <div class="block-options">
                        <a href="/admin/mobil/" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left me-1"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Card #1 -->
                            <div class="block block block-rounded  mb-0">
                                <div class=" row items-push js-gallery justify-content-sm-center">
                                    <div class="animated fadeIn">
                                        <a class="img-link img-link-zoom-in img-lightbox"
                                            href="<?= base_url(); ?>/backend/media/mobil/<?= $mobil['foto_mobil']; ?>">
                                            <img class="img-fluid img-thumbnail"
                                                src="<?= base_url(); ?>/backend/media/mobil/<?= $mobil['foto_mobil']; ?>"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Card #1 -->
                        </div>
                        <div class="col-md-6">
                            <!-- Card #1 -->
                            <div class="block block block-rounded mb-0">
                                <ul class="list-group push">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Nama Mobil :
                                        <span class="text-muted"><?= $mobil['nama_mobil']; ?></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Merek Mobil :
                                        <span class="text-muted"><?= $mobil['merek_mobil']; ?></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Transmisi :
                                        <span class="text-muted"> <?= $mobil['jenis_mobil']; ?></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Nomor TNKB :
                                        <span class="text-muted"><?= $mobil['nopol_mobil']; ?></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Warna Mobil :
                                        <span class="text-muted"><?= $mobil['warna_mobil']; ?></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Tahun Mobil :
                                        <span class="text-muted"><?= $mobil['tahun_mobil']; ?></span>

                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Keterangan :
                                        <span class="text-muted"><?= $mobil['ket_mobil']; ?></span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center fw-semibold">
                                        Aksi :
                                        <span class="text-muted text-end w-75"> <a class="btn btn-sm btn-warning"
                                                href="/mobil/edit/<?= $mobil['slug_mobil']; ?>">
                                                <i class="fas fa-edit me-1"></i> Ubah
                                            </a>
                                            <form action="/admin/mobil/<?= $mobil['id_mobil']; ?>" method="post"
                                                class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash-alt me-1"></i> Hapus</button>
                                            </form>
                                        </span>
                                    </li>
                                </ul>
                                <!-- END Card #1 -->
                            </div>
                            <div
                                class="flex-grow-0 block-content block-content-full text-muted text-center fw-semibold">
                                <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                    Terakhir di perbarui : <?= $mobil['updated_at']; ?>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Judul Halaman (Content) -->

<!-- END: Section [Content] -->

<!-- BEGIN: Custom File (JavaScript)-->
<?= $this->section('pageScript'); ?>
<script src="<?= base_url(); ?>/backend/js/lib/jquery.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url(); ?>/backend/js/pages/init-preview.js"></script>
<script>
Dashmix.helpersOnLoad(['jq-magnific-popup']);
</script>
<?= $this->endSection(); ?>
<!-- END: Custom File (JavaScript)-->
<?= $this->endSection(); ?>
<!-- END: Halaman [Mobil] -->