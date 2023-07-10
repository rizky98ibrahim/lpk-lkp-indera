<!-- BEGIN: Halaman [Dashboard] -->
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
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Dashboard</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active" aria-current="page">Siswa Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- END: Judul Halaman (Content) -->

<!-- BEGIN: Isi Halaman (Content) -->
<div class="content content-full">
    <div class="block block-themed bg-image"
        style="background-image: url('<?= base_url(); ?>/backend/media/photos/bg-dashboard.png');">
        <div class="py-5 text-center">
            <a class="img-link" href="be_pages_generic_profile.html">
                <img class="img-avatar img-avatar96 img-avatar-thumb"
                    src="<?= base_url(); ?>/backend/media/avatars/<?= user()->avatar; ?>" alt="">
            </a>
            <h4 class="my-2 text-dark fw-bold">
                <?php
                date_default_timezone_set('Asia/Jakarta');
                $jam = date('G');
                if ($jam >= 5 && $jam <= 10) {
                    echo "Selamat Pagi";
                } else if ($jam >= 11 && $jam <= 14) {
                    echo "Selamat Siang";
                } else if ($jam >= 15 && $jam <= 18) {
                    echo "Selamat Sore";
                } else if ($jam >= 19 || $jam <= 4) {
                    echo "Selamat Malam";
                }
                ?>, <span class="text-primary"><?= user()->nama; ?></span>👋</h4>
            <p class="text-dark">@<?= user()->username; ?></p>

            <p class="font-14 text-center text-dark m-auto">
                Kerja bagus, Dashboard Anda siap digunakan! Anda dapat mengubah profile, melakukan transaksi,
                melihat jadwal, dan sertifikat menggunakan
                dashboard
                ini.
            </p>

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
<!-- END: Halaman [Dashboard] -->