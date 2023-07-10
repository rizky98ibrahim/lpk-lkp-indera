<?= $this->extend('frontend/layout'); ?>
<?= $this->section('content'); ?>

<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('/frontend/images/background/aboutus.png');">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h2 class="text-white title-dark"> Tentang Kami </h2>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-white rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Profil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->

<!-- About Start -->
<section class="section">
    <div class="container">
        <div class="row align-items-center" id="counter">
            <div class="col-md-6">
                <img src="<?= base_url(); ?>/frontend/images/tentang/tentang-2.png" class="img-fluid" alt="">
            </div>
            <!--end col-->

            <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="ms-lg-4">
                    <div class="d-flex mb-4">
                        <span class="text-primary h1 mb-0"><span class="counter-value display-1 fw-bold"
                                data-target="48">0</span>+</span>
                        <span class="h6 align-self-end ms-2">Tahun <br> Pengalaman</span>
                    </div>
                    <div class="section-title">
                        <h4 class="title mb-4">Siapa kita ?</h4>
                        <p class="text-muted"> LPK/LKP INDERA adalah sebuah lembaga pendidikan kursus mengemudi yang
                            berdiri sejak tahun <span class="text-primary fw-bold">1974</span> dan berpusat di
                            Jl.
                            Bakalan No.04, Tamanagung, Kec. Muntilan, Magelang, Jawa Tengah 56413.</p>
                        <p class="text-muted">Selain berpengalaman lebih dari 48 tahun dengan jumlah lulusan siswa
                            sebanyak lebih dari <span class="text-primary fw-bold">800</span> siswa pertahun yang telah
                            mampu mengemudi dengan baik dan benar di seluruh wilayah
                            Magelang dan Jawa Tengah
                        </p>
                        <p class="text-muted">Kami adalah Lembaga Pendidikan Kursus Mengemudi yang telah berhasil
                            meningkatkan kemampuan SDM baik masyarakat umum, instansi pemerintahan maupun swasta melalui
                            pendidikan dan pelatihan mengemudi yang tersedia.
                        </p>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->


<!-- BEGIN: Section Promo-->
<div class="container-fluid px-0">
    <div class="py-5 bg-primary bg-gradient">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="section-title">
                        <div class="d-flex">
                            <i class="fal fa-badge-percent display-4 text-white title-dark"></i>
                            <div class="flex-1 ms-md-4 ms-3">
                                <h4 class="fw-bold text-light title-dark mb-1">Dapatkan Promo Menarik Lainnya.</h4>
                                <p class="text-white-50 mb-0">Hubungi kami sekarang juga.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mt-4 mt-sm-0">
                    <div class="text-md-end ms-5 ms-sm-0">
                        <a href="https://wa.me/6282137136565" class="btn btn-light me-2 me-lg-2 me-md-0 my-2"><i
                                class="fab fa-whatsapp"></i>
                            Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END:: Section Promo-->






<?= $this->endSection(); ?>