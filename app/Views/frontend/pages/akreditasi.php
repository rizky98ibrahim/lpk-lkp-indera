<?= $this->extend('frontend/layout'); ?>
<?= $this->section('content'); ?>

<section class="bg-half-170 bg-circle-gradiant d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h3 class="fw-bold mb-0"> Akreditasi & Perijinan Lembaga </h3>
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
                    <li class="breadcrumb-item active" aria-current="page">Akreditasi & Perijinan</li>
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
    <div class="row justify-content-center">
        <div class="col-lg-9 mt-4 pt-2">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item rounded">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Status Akreditasi
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body text-dark bg-white">
                            <span class="fw-bold">BAN PAUD dan PNF</span>
                            <span class="text-muted fw-bold">(Badan Akreditasi Nasional)</span>
                            <br>
                            <span class="text-primary fw-bold">Nomor : LKP/3308/0002/12/2018</span>
                            <br class="mb-1">
                            <span class="fw-bold">LA-LPK</span>
                            <span class="text-muted fw-bold">(Dinas Tenaga Kerja)</span>
                            <br>
                            <span class="text-primary fw-bold">Nomor : 646/LA-LPK/XII/2020</span>
                        </div>
                    </div>

                    <div class="accordion-item rounded mt-2">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button border-0 bg-light collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Ijin Usaha
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-dark bg-white">
                                <span class="fw-bold">DISPERINAKER</span>
                                <span class="text-muted fw-bold">(Dinas Perindustrian dan Tenaga Kerja)</span>
                                <br>
                                <span class="text-primary fw-bold">Nomor : 188.4/069/10/2018</span>
                                <br class="mb-1">
                                <span class="fw-bold">NOMOR INDUK BERUSAHA</span>
                                <span class="text-muted fw-bold">(NIB)</span>
                                <br>
                                <span class="text-primary fw-bold">Nomor : 9120207400417</span>
                                <br class="mb-1">
                                <span class="fw-bold">KEMENKUMHAM RI</span>
                                <span class="text-muted fw-bold">(Kementerian Hukum dan Hak Asasi Manusia)</span>
                                <br>
                                <span class="text-primary fw-bold">Nomor : AHU 0003322.AH.0107 2015</span>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item rounded mt-2">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button border-0 bg-light collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                Kurikulum Pelatihan
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse border-0 collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-muted bg-white">
                                <span class="fw-bold text-primary">- KKNI</span>
                                <span class="text-muted fw-bold">(Kerangka Kualifikasi Nasional Indonesia)</span>
                                <br class="mb-1">
                                <span class="fw-bold text-primary">- SKKNI</span>
                                <span class="text-muted fw-bold">(Standar Kompetensi Kerja Nasional Indonesia)</span>
                                <br class="mb-1">
                                <span class="fw-bold text-primary">- Standarisasi Sekolah Mengemudi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
</section>
<!--end section-->
<!-- Team Start -->

<?= $this->endSection(); ?>