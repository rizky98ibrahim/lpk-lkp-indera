<?= $this->extend('frontend/layout'); ?>
<?= $this->section('content'); ?>

<section class="bg-half-170 bg-circle-gradiant d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h3 class="fw-bold mb-0"> Sarana & Prasarana </h3>
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
                    <li class="breadcrumb-item active" aria-current="page">Sarana & Prasarana</li>
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

<!-- BEGIN: Section Sarana -->
<section class="section">
    <!-- BEGIN: Container Tombol Filter-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 filters-group-wrap">
                <div class="filters-group">
                    <ul class="container-filter list-inline mb-0 filter-options text-center">
                        <li class="list-inline-item categories-name border text-dark rounded active" data-group="all">
                            Semua</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="sarana">
                            Sarana</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="testimoni">
                            Testimoni</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="pelatihan">
                            Pelatihan</li>
                        <li class="list-inline-item categories-name border text-dark rounded" data-group="acara">
                            Acara</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Container Tombol Filter-->

    <!-- BEGIN: Container Sarana -->
    <div class="container-fluid">
        <div id="grid" class="row mt-4">
            <!-- Start 1-4 -->
            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["sarana"]'>
                <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="<?= base_url(); ?>/frontend/images/sarana/sarana-1.jpg" class="lightbox d-inline-block"
                            title="">
                            <img src="<?= base_url(); ?>/frontend/images/sarana/sarana-1.jpg" class="img-fluid"
                                alt="Mobil Pelatihan">
                        </a>
                        <div class="content bg-white p-3">
                            <h5 class="mb-0"><a href="#" class="text-dark title">Mobil
                                    Pelatihan</a></h5>
                            <h6 class="text-muted tag mb-0">Sarana</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["acara"]'>
                <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="<?= base_url(); ?>/frontend/images/sarana/acara-2.jpg" class="lightbox d-inline-block"
                            title="">
                            <img src="<?= base_url(); ?>/frontend/images/sarana/acara-2.jpg" class="img-fluid"
                                alt="Singapore Safety Driving Center">
                        </a>
                        <div class="content bg-white p-3">
                            <h5 class="mb-0"><a href="#" class="text-dark title">Singapore Safety Driving Center</a>
                            </h5>
                            <h6 class="text-muted tag mb-0">Acara</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["pelatihan"]'>
                <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="<?= base_url(); ?>/frontend/images/sarana/pelatihan-1.jpg"
                            class="lightbox d-inline-block" title="">
                            <img src="<?= base_url(); ?>/frontend/images/sarana/pelatihan-1.jpg" class="img-fluid"
                                alt="Pelatihan-1">
                        </a>
                        <div class="content bg-white p-3">
                            <h5 class="mb-0"><a href="#" class="text-dark title">Belajar tentang mesin</a></h5>
                            <h6 class="text-muted tag mb-0">Pelatihan</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["testimoni"]'>
                <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="<?= base_url(); ?>/frontend/images/sarana/testimoni-1.jpg"
                            class="lightbox d-inline-block" title="">
                            <img src="<?= base_url(); ?>/frontend/images/sarana/testimoni-1.jpg" class="img-fluid"
                                alt="Testimoni-1">
                        </a>
                        <div class="content bg-white p-3">
                            <h5 class="mb-0"><a href="#" class="text-dark title">Testimoni-1</a></h5>
                            <h6 class="text-muted tag mb-0">Testimoni</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End 1-4 -->

            <!-- Start 5-8 -->
            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["sarana"]'>
                <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="<?= base_url(); ?>/frontend/images/sarana/sarana-3.jpg" class="lightbox d-inline-block"
                            title="">
                            <img src="<?= base_url(); ?>/frontend/images/sarana/sarana-3.jpg" class="img-fluid"
                                alt="Tempat Pelatihan Parkir">
                        </a>
                        <div class="content bg-white p-3">
                            <h5 class="mb-0"><a href="#" class="text-dark title">Tempat Pelatihan Parkir</a></h5>
                            <h6 class="text-muted tag mb-0">Sarana</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["testimoni"]'>
                <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="<?= base_url(); ?>/frontend/images/sarana/testimoni-3.jpg"
                            class="lightbox d-inline-block" title="">
                            <img src="<?= base_url(); ?>/frontend/images/sarana/testimoni-3.jpg" class="img-fluid"
                                alt="Testmoni-3">
                        </a>
                        <div class="content bg-white p-3">
                            <h5 class="mb-0"><a href="#" class="text-dark title">Testmoni-3</a></h5>
                            <h6 class="text-muted tag mb-0">Testimoni</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["acara"]'>
                <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="<?= base_url(); ?>/frontend/images/sarana/acara-3.jpg" class="lightbox d-inline-block"
                            title="">
                            <img src="<?= base_url(); ?>/frontend/images/sarana/acara-3.jpg" class="img-fluid"
                                alt="Pembukaan PKK 2021">
                        </a>
                        <div class="content bg-white p-3">
                            <h5 class="mb-0"><a href="#" class="text-dark title">Pembukaan PKK 2021</a>
                            </h5>
                            <h6 class="text-muted tag mb-0">Acara</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["pelatihan"]'>
                <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="<?= base_url(); ?>/frontend/images/sarana/pelatihan-2.jpg"
                            class="lightbox d-inline-block" title="">
                            <img src="<?= base_url(); ?>/frontend/images/sarana/pelatihan-2.jpg" class="img-fluid"
                                alt="Pelatihan">
                        </a>
                        <div class="content bg-white p-3">
                            <h5 class="mb-0"><a href="#" class="text-dark title">Siswa cek kondisi ban</a></h5>
                            <h6 class="text-muted tag mb-0">Pelatihan</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End 5-8 -->

            <!-- Start 9-12 -->
            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["sarana"]'>
                <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="<?= base_url(); ?>/frontend/images/sarana/sarana-5.jpg" class="lightbox d-inline-block"
                            title="">
                            <img src="<?= base_url(); ?>/frontend/images/sarana/sarana-5.jpg" class="img-fluid"
                                alt="Tempat Pelatihan Parkir">
                        </a>
                        <div class="content bg-white p-3">
                            <h5 class="mb-0"><a href="#" class="text-dark title">Tempat Belajar Parkir</a></h5>
                            <h6 class="text-muted tag mb-0">Sarana</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["testimoni"]'>
                <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="<?= base_url(); ?>/frontend/images/sarana/testimoni-4.jpg"
                            class="lightbox d-inline-block" title="">
                            <img src="<?= base_url(); ?>/frontend/images/sarana/testimoni-4.jpg" class="img-fluid"
                                alt="Testimoni-2">
                        </a>
                        <div class="content bg-white p-3">
                            <h5 class="mb-0"><a href="#" class="text-dark title">Testmoni-2</a></h5>
                            <h6 class="text-muted tag mb-0">Testimoni</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["acara"]'>
                <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="<?= base_url(); ?>/frontend/images/sarana/acara-5.jpg" class="lightbox d-inline-block"
                            title="">
                            <img src="<?= base_url(); ?>/frontend/images/sarana/acara-5.jpg" class="img-fluid"
                                alt="Penerimaan penghargaan">
                        </a>
                        <div class="content bg-white p-3">
                            <h5 class="mb-0"><a href="#" class="text-dark title">Penerimaan penghargaan</a>
                            </h5>
                            <h6 class="text-muted tag mb-0">Acara</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["pelatihan"]'>
                <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body p-0">
                        <a href="<?= base_url(); ?>/frontend/images/sarana/pelatihan-5.jpg"
                            class="lightbox d-inline-block" title="">
                            <img src="<?= base_url(); ?>/frontend/images/sarana/pelatihan-5.jpg" class="img-fluid"
                                alt="Pelatihan">
                        </a>
                        <div class="content bg-white p-3">
                            <h5 class="mb-0"><a href="#" class="text-dark title">Mengecek kondisi mesin</a></h5>
                            <h6 class="text-muted tag mb-0">Pelatihan</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End 9-12 -->
        </div>
    </div>
    <!-- END: Container Sarana-->

</section>
<!-- END: Section Sarana-->


<?= $this->endSection(); ?>