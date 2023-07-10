<?= $this->extend('frontend/layout'); ?>
<?= $this->section('content'); ?>

<section class="bg-half-170 bg-circle-gradiant d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h3 class="fw-bold mb-0"> Visi Misi, Motto & Slogan </h3>
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
                    <li class="breadcrumb-item active" aria-current="page">Visi Misi</li>
                </ul>
            </nav>
        </div>
    </div>
    <!--end container-->
</section>
<!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
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

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow rounded border-0">
                    <div class="card-body">
                        <h5 class="card-title">Visi :</h1>
                            <p class="text-muted">Memberikan layanan dan kualitas terbaik dalam mencetak pengemudi
                                dengan
                                baik dan benar yang berpedoman pada undang-undang lalu lintas dan teknis mengemudi.</p>
                            <h5 class="card-title">Misi :</h5>
                            <ul class="list-unstyled text-muted">
                                <li>1. Menjadi penyedia jasa layanan kursus mengemudi profesional, baik, murah,
                                    terbukti, terpercaya di Indonesia.</li>
                                <li>2. Menjadi penyedia jasa instruktur berpengalaman, sabar dalam memberikan pelatihan
                                    mengemudi mobil.</li>
                            </ul>

                            <h5 class="card-title">Motto :</h5>
                            <p class="text-muted ">Dengan Keramahan, Senyuman, Kesabaran Kami hantarkan
                                anda menjadi
                                pengemudi yang baik.</p>
                            <h5 class="card-title">Slogan :</h5>
                            <p class="text-primary fw-bold ">LPK-LKP INDERA PILIHAN SAHABAT CERDAS</p>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>







<?= $this->endSection(); ?>