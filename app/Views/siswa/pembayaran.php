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
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Pembayaran</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- END: Judul Halaman (Content) -->

<!-- BEGIN: Isi Halaman (Content) -->
<div class="content">
    <div class="block block-themed">
        <div class="block-header">
            <h2 class="block-title fw-semibold">Konfirmasi Pembayaran</h2>
        </div>

        <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-xl-6">
                    <a class="block block-rounded block-link-shadow text-center"
                        href="<?= site_url('/siswa/konfirmasi'); ?>">
                        <div class="block-content bg-success">
                            <i class="text-white fad fa-check-double fa-2x"></i>
                            <p class="text-white text-uppercase fs-sm fw-bold">
                                Konfirmasi Pembayaran
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6">
                    <a class="block block-rounded block-link-shadow text-center" href="<?= site_url('/whatsapp'); ?>">
                        <div class="block-content bg-danger">
                            <i class="text-white fad fa-hand-holding-usd fa-2x"></i>
                            <p class="text-white text-uppercase fs-sm fw-bold">
                                Pembayaran di Tempat
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-md-12">
                    <div class="block block-themed">
                        <div class="block-header block-header-default">
                            <h3 class="block-title fw-bold">TATA TERTIB LPK/LKP INDERA</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="pinned_toggle">
                                    <i class="si si-pin"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="content_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>
                                1. Saat mengikuti pelatihan, Siswa dalam keadaan sehat jasmani dan rohani.
                                <br>
                                2. Siswa harus tertib serta mematuhi arahan instruktur dan disiplin berlalu lintas.
                                <br>
                                3. Siswa datang untuk latihan mengemudi sesuai jadwal yang sudah ditentukan.
                                <br>
                                4. Jadwal latihan mengengemudi bersifat tidak mengikat & dapat berubah sewaktu waktu
                                sesuai yang diinginkan siswa.
                                <br>
                                5. Siswa datang ditempat 10 (sepuluh) menit sebelum pelatihan dimulai.
                                <br>
                                6. Siswa wajib mengisi daftar absen sebelum pelatihan.
                                <br>
                                7. Kecepatan saat pelatihan mengemudi maksimal 40 km / jam, Bila melebihi kecepatan yang
                                sudah ditentukan maka mesin akan mati.
                                <br>
                                8. Siswa yang tidak datang harus izin paling lambat 2 jam sebelum pelatihan di mulai.
                                <br>
                                9. Siswa dilarang menerima telephone / SMS / WA atau sejenisnya selama pelatihan.
                                <br>
                                10. Siswa dilarang menggunakan peralatan elektronik (HP, Tablet,dll) selama pelatihan.
                                <br>
                                11. Siswa dilarang keras menggunakan, obat-obatan, alkohol, merokok pada saat pelatihan.
                                <br>
                                12. Selain siswa yang mengikuti pelatihan tidak diperkenankan membawa teman, suadara
                                maupun anak saat pelatihan.
                                <br>
                                13. Dilarang membawa binatang.
                                <br>
                                14. Siswa harus taat serta patuh kepada instruktur tata tertib yang berlaku di LPK / LKP
                                INDERA.
                                <br>
                                15. Administrasi yang sudah dibayarkan tidak dapat diambil kembali apabila ada pemutusan
                                sepihak dari siswa. (tidak melanjutkan pelatihan karena alasan tertentu)
                                <br>
                                16. Dalam kurun waktu maksimal 3 bulan tidak meneruskan pelatihan maka hak pelatihan
                                siswa tidak berlaku lagi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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