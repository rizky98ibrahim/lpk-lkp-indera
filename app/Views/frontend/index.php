<?= $this->extend('frontend/layout'); ?>
<?= $this->section('content'); ?>

<!-- BEGIN: Section Pengenalan-->
<section class="bg-half-100 d-table w-100" id="pengenalan">
    <div class="container">
        <div class="row mt-5 align-items-center position-relative" style="z-index: 1;">
            <!-- BEGIN: Judul Pengenalan-->
            <div class="col-lg-6">
                <div class="title-heading text-center text-lg-start">
                    <h5 class="text-dark">Selamat datang di Website</h5>
                    <!-- <h1 class="heading fw-bold mt-2 mb-3">Kursus Mengemudi <br><span class="text-primary">LPK-LKP
                            INDERA</span> </h1> -->
                    <!-- <h1 class="heading fw-bold mt-2 mb-3">Kursus Mengemudi <br><span class="text-primary typewrite"
                            data-period="2000" data-type='["LPK-LKP INDERA"]'><span class="wrap"></span> </span></h1> -->

                    <h1 class="heading fw-bold mt-2 mb-3">Kursus Mengemudi <br><span class="text-primary typewrite"
                            data-period="2000" data-type='["LPK-LKP INDERA","LPK-INDERA","LKP-INDERA"]'><span
                                class="wrap"></span> </span></h1>

                    <p class="para-desc text-muted">Bagi anda yang ingin belajar mengemudi mobil, kami telah mempunyai
                        pengalaman selama 48 tahun untuk kursus mengemudi.</p>
                    <div class="mt-3">
                        <a href=" <?= site_url('/whatsapp'); ?>" class="btn btn-primary me-2 mt-2"><i
                                class="fab fa-whatsapp" target="_blank"></i> Whatsapp Kami</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdfFr8m_DMcfKGSVD3Nj3ZAN09O02AEEKW-j7lD55P9WlvJXw/viewform"
                            class="btn btn-soft-primary mt-2" target="_blank">Daftar Online <i
                                class="fad fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
            <!-- END:: Judul Pengenalan-->

            <!-- BEGIN: Konten Pengenalan-->
            <div class="col-lg-6 mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="card border-0 shadow rounded ms-lg-4 overflow-hidden">
                    <div class="d-flex p-2 bg-light justify-content-between align-items-center">
                        <div>
                            <a href="#" class="text-danger"><i class="mdi mdi-circle"></i></a>
                            <a href="#" class="text-warning"><i class="mdi mdi-circle"></i></a>
                            <a href="#" class="text-success"><i class="mdi mdi-circle"></i></a>
                        </div>
                        <small class="fw-bold"><i class="mdi mdi-circle-medium text-primary"></i> LPK-LKP INDERA</small>
                    </div>
                    <div class="bg-light px-2 position-relative">
                        <video controls class="w-100 rounded" preload="none"
                            poster="<?= base_url(); ?>/frontend/images/video/thumbnail.jpg">
                            <source src="<?= base_url(); ?>/frontend/images/video/profil.mp4" type="video/mp4">
                        </video>
                        <div class="position-absolute top-0 start-0">
                            <div class="mt-2 ms-3">
                                <span class="badge bg-danger">Youtube</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END:: Konten Pengenalan-->
        </div>
    </div>
</section>
<!-- END:: Pengenalan Pengenalan-->

<!-- BEGIN: Section Counter-->
<section class="section-three bg-primary" id="counter">
    <div class="container">
        <div class="row">
            <!-- BEGIN: Tahun Pengalaman-->
            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center text-white">
                    <h1><i class="fas fa-hourglass-start "></i></h1>
                    <h2 class="mb-0 mt-4 "><span class="counter-value" data-target="48">1</span>+</h2>
                    <h6 class="counter-head text-light">Tahun Pengalaman</h6>
                </div>
            </div>
            <!-- END:: Tahun Pengalaman-->
            <!-- BEGIN: Siswa Pertahun-->
            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center text-white">
                    <h1><i class="far fa-user "></i></h1>
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-target="800">200</span>+</h2>
                    <h6 class="counter-head text-light">Siswa per tahun</h6>
                </div>
            </div>
            <!-- END:: Siswa Pertahun-->
            <!-- BEGIN: Instruktur-->
            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center text-white">
                    <h1><i class="fas fa-users"></i></h1>
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-target="20">1</span>+</h2>
                    <h6 class="counter-head text-light">Instruktur</h6>
                </div>
            </div>
            <!-- END:: Instruktur-->
            <!-- BEGIN: Penghargaan-->
            <div class="col-md-3 col-6 mt-4 pt-2">
                <div class="counter-box text-center text-white">
                    <h1><i class="fad fa-trophy"></i></h1>
                    <h2 class="mb-0 mt-4"><span class="counter-value" data-target="150">1</span>+</h2>
                    <h6 class="counter-head text-light">Penghargaan</h6>
                </div>
            </div>
            <!-- END:: Penghargaan-->
        </div>
    </div>
</section>
<!-- END:: Section Counter-->

<!-- BEGIN: Section Pelayanan-->
<section class="section" id="pelayanan">
    <div class="container">
        <!-- BEGIN: Judul Pelayanan-->
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="600">Pelayanan Kami</h4>
                    <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1000">Pelayanan
                        yang kami berikan dapat menjadi alasan
                        mengapa harus memilih <span class=" text-primary fw-bold">kami</span>, sebagai tempat
                        pelatihan kursus mengemudi.</p>
                </div>
            </div>
        </div>
        <!-- END:: Judul Pelayanan-->

        <div class="row">
            <!-- BEGIN: Konten (Terpercaya)-->
            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="far fa-shield-check h2 text-primary"></i>
                    </div>
                    <div class="content mt-4">
                        <h5>Terpercaya</h5>
                        <p class="text-muted mb-0">
                            Hingga saat ini LPK-LKP INDERA sudah mengajarkan ribuan siswa kursus diseluruh Magelang dan
                            Jawa tengah. Kami menjadi salah satu kursus mengemudi yang terpercaya.
                        </p>
                    </div>
                </div>
            </div>
            <!-- END:: Konten (Terpercaya)-->

            <!-- BEGIN: Konten (Harga Relatif Murah)-->
            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="far fa-wallet h2 text-primary"></i>
                    </div>
                    <div class="content mt-4">
                        <h5>Harga Relatif Murah</h5>
                        <p class="text-muted mb-0">Mengajarkan kursus mengemudi dengan baik dan benar sesuai dengan
                            peraturan dan perundang-undangan lalu lintas dengan biaya yang terjangkau dan murah adalah
                            tujuan kami.</p>
                    </div>
                </div>
            </div>
            <!-- END:: Konten (Harga Relatif Murah)-->

            <!-- BEGIN: Konten (Pelayanan Terbaik)-->
            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="far fa-smile-beam h2 text-primary"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Pelayanan Terbaik</h5>
                        <p class="text-muted mb-0">Staff dan Instruktur kami memiliki sertifikat kompetensi dibidangnya
                            sehingga selalu bekerja dengan sepenuh hati untuk bisa mengajarkan anda mengemudi dengan
                            baik dan benar.</p>
                    </div>
                </div>
            </div>
            <!-- END:: Konten (Pelayanan Terbaik)-->

            <!-- BEGIN: Konten (Jadwal Belajar Flexible)-->
            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="far fa-calendar-alt h2 text-primary"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Jadwal Belajar Flexible</h5>
                        <p class="text-muted mb-0">Jangan khawatir apabila anda mempunyai jadwal yang padat, disini anda
                            bisa menentukan hari dan jam Kursus sesuai kebutuhan anda.</p>
                    </div>
                </div>
            </div>
            <!-- END:: Konten (Jadwal Belajar Flexible)-->

            <!-- BEGIN: Konten (Maintenance Rutin)-->
            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="far fa-wrench h2 text-primary"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Maintenance Rutin</h5>
                        <p class="text-muted mb-0">Demi Mengutamakan keselamatan, Kami selalu menjaga kondisi mobil
                            secara berkala dengan baik agar
                            tidak mengurangi kenyaman anda dalam belajar.</p>
                    </div>
                </div>
            </div>
            <!-- END:: Konten (Maintenance Rutin)-->

            <!-- BEGIN: Konten (Terakreditasi)-->
            <div class="col-md-4 col-12 mt-5">
                <div class="features text-center">
                    <div class="image position-relative d-inline-block">
                        <i class="fad fa-file-certificate h2 text-primary"></i>
                    </div>

                    <div class="content mt-4">
                        <h5>Terakreditasi</h5>
                        <p class="text-muted mb-0">Satu-satunya Lembaga Pelatihan Mengemudi di Kabupaten Magelang yang
                            terakreditasi oleh <span class="text-primary">BAN PAUD PNF <span
                                    class="text-muted">dan</span> LA-LPK</span>.</p>
                    </div>
                </div>
            </div>
            <!-- END:: Konten (Terakreditasi)-->
        </div>
    </div>
</section>
<!-- END:: Section Pelayanan-->

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
                        <a href="<?= site_url('/whatsapp'); ?>" target="_blank"
                            class="btn btn-light me-2 me-lg-2 me-md-0 my-2"><i class="fab fa-whatsapp"></i>
                            Hubungi Kami</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END:: Section Promo-->

<!-- BEGIN: Section Alamat-->
<section class="section" id="kantor">
    <div class="container">
        <!-- BEGIN: Judul Section Alamat-->
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="600">Kantor Kami</h4>
                    <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1000">Selain
                        berpusat di<span class="text-primary fw-bold"> kami </span> juga memiliki beberapa kantor cabang
                        yang tersebar di wilayah
                        Magelang.</p>
                </div>
            </div>
        </div>
        <!-- END:: Judul Section Alamat-->
        <div class="row">
            <!-- BEGIN: Alamat Muntilan-->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card shadow rounded border-0 overflow-hidden">
                    <div class="card-body content">
                        <h5 class="text-primary fw-bold mb-3">Kantor Muntilan</h5>

                        <h6 class="mb-0">Telepon :</h6>
                        <p class="para text-muted">
                            <a href="tel:+6282137136565" class="text-muted">0293-587609</a>
                        </p>

                        <h6 class="mb-0">Whatsapp :</h6>
                        <p class="para text-muted">
                            <a href="https://wa.me/6282226213111" class="text-muted">0822-2621-3111</a>
                            <a href="https://wa.me/6281225539991" class="text-muted">0812-2553-9991</a>
                        </p>
                        <h6 class="mb-0">Alamat :</h6>
                        <p class="para mb-0">
                            <a href="https://goo.gl/maps/fch57TxS7xSbMGtw6" class="text-muted">
                                Jl. Bakalan No.04, Kec. Muntilan, Kab. Magelang, Jawa Tengah 56413
                            </a>
                        </p>


                    </div>
                </div>
            </div>
            <!-- END:: Alamat Muntilan-->
            <!-- BEGIN: Alamat Sawitan-->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card shadow rounded border-0 overflow-hidden">
                    <div class="card-body content">
                        <h5 class="text-primary fw-bold mb-3">Kantor Sawitan</h5>

                        <h6 class="mb-0">Telepon :</h6>
                        <p class="para text-muted">
                            <a href="tel:+6281216637989" class="text-muted">0812-1663-7989</a>
                        </p>

                        <h6 class="mb-0">Whatsapp :</h6>
                        <p class="para text-muted">
                            <a href="https://wa.me/6281216637989" class="text-muted">0812-1663-7989</a>
                        </p>
                        <h6 class="mb-0">Alamat :</h6>
                        <p class="para mb-0">
                            <a href="https://goo.gl/maps/2yGUZnWaxrZG82DR7" class="text-muted">
                                Jl. Soekarno Hatta, Ngentan I, Sawitan, Mungkid, Jawa Tengah 56511
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END:: Alamat Sawitan-->
            <!-- BEGIN: Alamat Salaman-->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card shadow rounded border-0 overflow-hidden">
                    <div class="card-body content">
                        <h5 class="text-primary fw-bold mb-3">Kantor Salaman</h5>

                        <h6 class="mb-0">Telepon :</h6>
                        <p class="para text-muted">
                            <a href="tel:+6281390204355" class="text-muted">0813-9020-4355</a>
                        </p>
                        <h6 class="mb-0">Whatsapp :</h6>
                        <p class="para text-muted">
                            <a href="https://wa.me/6281390204355" class="text-muted">0813-9020-4355</a>
                        </p>
                        <h6 class="mb-0">Alamat :</h6>
                        <p class="para mb-0">
                            <a href="https://goo.gl/maps/EzZAwjy7YVrYvePR7" class="text-muted">
                                Jl. Magelang, Sawah, Sidomulyo, Kec. Salaman, Jawa Tengah 56162
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END:: Alamat Salaman-->
            <!-- BEGIN: Alamat Mertoyudan-->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card shadow rounded border-0 overflow-hidden">
                    <div class="card-body content">
                        <h5 class="text-primary fw-bold mb-3">Kantor Mertoyudan</h5>
                        <h6 class="mb-0">Telepon :</h6>
                        <p class="para text-muted">
                            <a href="tel:+6282326279991" class="text-muted">0823-2627-9991</a>
                        </p>
                        <p class="para text-muted">
                            <a href="https://wa.me/6282326279991" class="text-muted">0823-2627-9991</a>
                        </p>
                        <h6 class="mb-0">Alamat :</h6>
                        <p class="para mb-0">
                            <a href="https://goo.gl/maps/HFuk6z5woANFfXY59" class="text-muted">
                                Jl. Magelang, Sumberrejo, Kec. Mertoyudan, Jawa Tengah 56172
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END:: Alamat Mertoyudan-->
        </div>
    </div>
</section>
<!-- END:: Section Alamat-->

<!-- BEGIN: Section Galeri-->
<section class="section" id="galeri">
    <div class="container">
        <!-- BEGIN: Judul Section Galeri-->
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="600">Galeri Kami</h4>
                    <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1000">Berikut
                        adalah moment yang diabadikan sebagai bukti dari <span class="text-primary fw-bold">kami
                        </span>untuk meningkatkan pelayanan yang lebih baik lagi
                        kedepannya.</p>
                </div>
            </div>
        </div>
        <!-- END:: Judul Section Galeri-->

        <div class="row justify-content-center">
            <div class="col-12 mb-4 filters-group-wrap">
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
        <div class="container-fluid">
            <div id="grid" class="row mt-4">
                <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["sarana"]'>
                    <div
                        class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="<?= base_url(); ?>/frontend/images/sarana/sarana-1.jpg"
                                class="lightbox d-inline-block" title="">
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
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["acara"]'>
                    <div
                        class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="<?= base_url(); ?>/frontend/images/sarana/acara-1.jpg"
                                class="lightbox d-inline-block" title="">
                                <img src="<?= base_url(); ?>/frontend/images/sarana/acara-1.jpg" class="img-fluid"
                                    alt="Uji Kompetensi Praktik 2021">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="#" class="text-dark title">Uji Kompetensi Praktik 2021</a>
                                </h5>
                                <h6 class="text-muted tag mb-0">Acara</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["pelatihan"]'>
                    <div
                        class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
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
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["testimoni"]'>
                    <div
                        class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="<?= base_url(); ?>/frontend/images/sarana/testimoni-1.jpg"
                                class="lightbox d-inline-block" title="">
                                <img src="<?= base_url(); ?>/frontend/images/sarana/testimoni-1.jpg" class="img-fluid"
                                    alt="Testimoni-1">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="#" class="text-dark title">Ibu Indah Wati</a></h5>
                                <h6 class="text-muted tag mb-0">Testimoni</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["sarana"]'>
                    <div
                        class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="<?= base_url(); ?>/frontend/images/sarana/sarana-3.jpg"
                                class="lightbox d-inline-block" title="">
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
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["testimoni"]'>
                    <div
                        class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="<?= base_url(); ?>/frontend/images/sarana/testimoni-3.jpg"
                                class="lightbox d-inline-block" title="">
                                <img src="<?= base_url(); ?>/frontend/images/sarana/testimoni-3.jpg" class="img-fluid"
                                    alt="Ibu Gabriella T">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="#" class="text-dark title">Ibu Gabriella T</a></h5>
                                <h6 class="text-muted tag mb-0">Testimoni</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["acara"]'>
                    <div
                        class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                        <div class="card-body p-0">
                            <a href="<?= base_url(); ?>/frontend/images/sarana/acara-6.jpg"
                                class="lightbox d-inline-block" title="">
                                <img src="<?= base_url(); ?>/frontend/images/sarana/acara-6.jpg" class="img-fluid"
                                    alt="Penghargaan Anugerah Jawa Pos">
                            </a>
                            <div class="content bg-white p-3">
                                <h5 class="mb-0"><a href="#" class="text-dark title">Penerimaan penghargaan</a>
                                </h5>
                                <h6 class="text-muted tag mb-0">Acara</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 spacing picture-item" data-groups='["pelatihan"]'>
                    <div
                        class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
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
                <!--end col-->
            </div>
        </div>
        <div class="mt-4 text-center">
            <a href="<?= site_url('/sarana-prasarana'); ?>" class="btn btn-primary">Galeri Lainnya <i
                    class="fad fa-arrow-right"></i></a>
        </div>
    </div>
</section>
<!-- END:: Section Galeri-->

<!-- Start Harga Paket -->
<section class="section bg-light" id="paket">
    <div class="container">
        <!-- Start Row Judul -->
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="600">Paket Kami</h4>
                    <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1000">Kami
                        menawarkan Paket Latihan Manual dan Matic<span class="text-primary fw-bold"> yang </span>tentu
                        saja dengan harga bersaing dan pelayanan yang maksimal.</p>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row Judul -->

        <div class="row align-items-center">
            <div class="col-12 mt-4 pt-2">
                <div class="text-center">
                    <ul class="nav nav-pills rounded-pill justify-content-center d-inline-block border py-1 px-2"
                        id="pills-tab" role="tablist">
                        <li class="nav-item d-inline-block">
                            <a class="nav-link px-3 rounded-pill pmatic" id="pMatic" data-bs-toggle="pill" href="#Matic"
                                role="tab" aria-controls="Matic" aria-selected="true">Paket Matic</a>
                        </li>
                        <li class="nav-item d-inline-block">
                            <a class="nav-link px-3 rounded-pill active pmanual" id="pManual" data-bs-toggle="pill"
                                href="#Manual" role="tab" aria-controls="Manual" aria-selected="false">Paket Manual</a>
                        </li>
                        <li class="nav-item d-inline-block">
                            <a class="nav-link px-3 rounded-pill pkombinasi" id="pKombinasi" data-bs-toggle="pill"
                                href="#Kombinasi" role="tab" aria-controls="Kombinasi" aria-selected="false">Paket
                                Kombinasi</a>
                        </li>
                    </ul>
                </div>

                <!-- Start Konten Paket -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="Matic" role="tabpanel" aria-labelledby="pMatic">
                        <div class="row">
                            <!-- BEGIN: Matic #1-->
                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing-rates bg-light rounded border-0">
                                    <div class="card-body py-5">
                                        <h6 class="title fw-bold text-uppercase text-primary mb-4">
                                            Matic #1
                                        </h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">Rp</span>
                                            <span class="price h2 mb-0">500.000</span>
                                            <span class="h4 align-self-end mb-1">,-</span>
                                        </div>
                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>2x
                                                Pertemuan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>4 Jam
                                                Pelatihan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-danger h5 me-2"><i
                                                        class="uil uil-times-circle align-middle"></i></span>Layanan
                                                Antar Jemput</li>
                                        </ul>
                                        <a href="<?= site_url('auth'); ?>" class="btn btn-primary mt-4">Daftar</a>
                                        <p class="mt-3 mb-0 text-muted">*1x Pertemuan = 2 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Matic #1-->

                            <!-- BEGIN: Matic #2-->
                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing-rates starter-plan bg-white shadow rounded border-0">
                                    <div class="ribbon ribbon-right ribbon-danger overflow-hidden">
                                        <span class="text-center d-block shadow small h6">Terlaris</span>
                                    </div>
                                    <div class="card-body py-5">
                                        <h6 class="title text-uppercase fw-bold text-primary mb-4">Matic #2
                                        </h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">Rp</span>
                                            <span class="price h2 mb-0">720.000</span>
                                            <span class="h4 align-self-end mb-1">,-</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>3x
                                                Pertemuan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>6 Jam
                                                Pelatihan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Layanan
                                                Antar Jemput</li>
                                        </ul>
                                        <a href="<?= site_url('auth'); ?>" class="btn btn-primary mt-4">Daftar</a>
                                        <p class="mt-3 mb-0 text-muted">*1x Pertemuan = 2 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Matic #2-->

                            <!-- BEGIN: Matic #3-->
                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing-rates bg-light rounded border-0">
                                    <div class="card-body py-5">
                                        <h6 class="title fw-bold text-uppercase text-primary mb-4">Matic #3</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">Rp</span>
                                            <span class="price h2 mb-0">920.000</span>
                                            <span class="h4 align-self-end mb-1">,-</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>4x
                                                Pertemuan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>8 Jam
                                                Pelatihan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Layanan
                                                Antar Jemput</li>
                                        </ul>
                                        <a href="<?= site_url('auth'); ?>" class="btn btn-primary mt-4">Daftar</a>
                                        <p class="mt-3 mb-0 text-muted">*1x Pertemuan = 2 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Matic #3-->

                            <!-- BEGIN: Matic #4-->
                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing-rates bg-light rounded border-0">
                                    <div class="card-body py-5">
                                        <h6 class="title fw-bold text-uppercase text-primary mb-4">Matic #4</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">Rp</span>
                                            <span class="price h2 mb-0">1.140.000</span>
                                            <span class="h4 align-self-end mb-1">,-</span>
                                        </div>
                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>5x
                                                Pertemuan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>10 Jam
                                                Pelatihan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Layanan
                                                Antar Jemput</li>
                                        </ul>
                                        <a href="<?= site_url('auth'); ?>" class="btn btn-primary mt-4">Daftar</a>
                                        <p class="mt-3 mb-0 text-muted">*1x Pertemuan = 2 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Matic #4-->
                        </div>
                    </div>

                    <div class="tab-pane fade active show" id="Manual" role="tabpanel" aria-labelledby="pManual">
                        <div class="row">
                            <!-- BEGIN: Manual #1-->
                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing-rates bg-light rounded border-0">
                                    <div class="card-body py-5">
                                        <h6 class="title fw-bold text-uppercase text-primary mb-4">Manual #1</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">Rp</span>
                                            <span class="price h2 mb-0">400.000</span>
                                            <span class="h4 align-self-end mb-1">,-</span>
                                        </div>
                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>2x
                                                Pertemuan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>4 Jam
                                                Pelatihan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-danger h5 me-2"><i
                                                        class="uil uil-times-circle align-middle"></i></span>Layanan
                                                Antar Jemput</li>
                                        </ul>
                                        <a href="<?= site_url('auth'); ?>" class="btn btn-primary mt-4">Daftar</a>
                                        <p class="mt-3 mb-0 text-muted">*1x Pertemuan = 2 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Manual #1-->

                            <!-- BEGIN: Manual #2-->
                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing-rates bg-light rounded border-0">
                                    <div class="card-body py-5">
                                        <h6 class="title text-uppercase fw-bold text-primary mb-4">Manual #2
                                        </h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">Rp</span>
                                            <span class="price h2 mb-0">600.000</span>
                                            <span class="h4 align-self-end mb-1">,-</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>3x
                                                Pertemuan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>6 Jam
                                                Pelatihan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Layanan
                                                Antar Jemput</li>
                                        </ul>
                                        <a href="<?= site_url('auth'); ?>" class="btn btn-primary mt-4">Daftar</a>
                                        <p class="mt-3 mb-0 text-muted">*1x Pertemuan = 2 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Manual #2-->

                            <!-- BEGIN: Manual #3-->
                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing-rates starter-plan bg-white shadow rounded border-0">
                                    <div class="ribbon ribbon-right ribbon-danger overflow-hidden">
                                        <span class="text-center d-block shadow small h6">Terlaris</span>
                                    </div>
                                    <div class="card-body py-5">
                                        <h6 class="title fw-bold text-uppercase text-primary mb-4">Manual #3</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">Rp</span>
                                            <span class="price h2 mb-0">700.000</span>
                                            <span class="h4 align-self-end mb-1">,-</span>
                                        </div>
                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>4x
                                                Pertemuan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>8 Jam
                                                Pelatihan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Layanan
                                                Antar Jemput</li>
                                        </ul>
                                        <a href="<?= site_url('auth'); ?>" class="btn btn-primary mt-4">Daftar</a>
                                        <p class="mt-3 mb-0 text-muted">*1x Pertemuan = 2 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Manual #3-->

                            <!-- BEGIN: Manual #4-->
                            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing-rates bg-light rounded border-0">
                                    <div class="card-body py-5">
                                        <h6 class="title fw-bold text-uppercase text-primary mb-4">Manual #4</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">Rp</span>
                                            <span class="price h2 mb-0">800.000</span>
                                            <span class="h4 align-self-end mb-1">,-</span>
                                        </div>
                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>5x
                                                Pertemuan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>10 Jam
                                                Pelatihan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Layanan
                                                Antar Jemput</li>
                                        </ul>
                                        <a href="<?= site_url('auth'); ?>" class="btn btn-primary mt-4">Daftar</a>
                                        <p class="mt-3 mb-0 text-muted">*1x Pertemuan = 2 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Manual #4-->
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Kombinasi" role="tabpanel" aria-labelledby="pKombinasi">
                        <div class="row">
                            <!-- BEGIN: Kombinasi #1-->
                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing-rates bg-light rounded border-0">
                                    <div class="card-body py-5">
                                        <h6 class="title text-uppercase fw-bold text-primary mb-4">Kombinasi #1
                                        </h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">Rp</span>
                                            <span class="price h2 mb-0">800.000</span>
                                            <span class="h4 align-self-end mb-1">,-</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>3x
                                                Pertemuan
                                                (Matic)</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>1x
                                                Pertemuan
                                                (Manual)</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>8 Jam
                                                Pelatihan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Layanan
                                                Antar Jemput</li>
                                        </ul>
                                        <a href="<?= site_url('auth'); ?>" class="btn btn-primary mt-4">Daftar</a>
                                        <p class="mt-3 mb-0 text-muted">*1x Pertemuan = 2 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Kombinasi #1-->

                            <!-- BEGIN: Kombinasi #2-->
                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing-rates starter-plan bg-white shadow rounded border-0">
                                    <div class="ribbon ribbon-right ribbon-danger overflow-hidden">
                                        <span class="text-center d-block shadow small h6">Terlaris</span>
                                    </div>
                                    <div class="card-body py-5">
                                        <h6 class="title fw-bold text-uppercase text-primary mb-4">Kombinasi #2</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">Rp</span>
                                            <span class="price h2 mb-0">900.000</span>
                                            <span class="h4 align-self-end mb-1">,-</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>4x
                                                Pertemuan
                                                (Matic)</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>1x
                                                Pertemuan
                                                (Manual)</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>10 Jam
                                                Pelatihan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Layanan
                                                Antar Jemput</li>
                                        </ul>
                                        <a href="<?= site_url('auth'); ?>" class="btn btn-primary mt-4">Daftar</a>
                                        <p class="mt-3 mb-0 text-muted">*1x Pertemuan = 2 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Kombinasi #2-->

                            <!-- BEGIN: Kombinasi #3-->
                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing-rates bg-light rounded border-0">
                                    <div class="card-body py-5">
                                        <h6 class="title fw-bold text-uppercase text-primary mb-4">Kombinasi #3</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">Rp</span>
                                            <span class="price h2 mb-0">1.000.000</span>
                                            <span class="h4 align-self-end mb-1">,-</span>
                                        </div>


                                        <ul class="list-unstyled mb-0 ps-0">
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>5x
                                                Pertemuan
                                                (Matic)</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>1x
                                                Pertemuan
                                                (Manual)</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>12 Jam
                                                Pelatihan</li>
                                            <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Layanan
                                                Antar Jemput</li>
                                        </ul>
                                        <a href="<?= site_url('auth'); ?>" class="btn btn-primary mt-4">Daftar</a>
                                        <p class="mt-3 mb-0 text-muted">*1x Pertemuan = 2 Jam</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Kombinasi #3-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ends Konten Paket -->
        </div>
        <!--end col-->
    </div>

    </div>
</section>
<!-- End Harga Paket -->

<!-- BEGIN: Section Testimoni -->
<section class="section bg-light" id="testimoni">
    <div class="container">
        <!-- BEGIN: Judul Section Testimoni-->
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="600">Kata Mereka</h4>

                    <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1000">Pendapat
                        mereka yang sudah mengikuti pelatihan
                        menjadi
                        bukti dari <span class="text-primary fw-bold">kami</span> tentang pelayanan yang diberikan
                        kepada anda nantinya.</p>
                </div>
            </div>
        </div>
        <!-- END:: Judul Section Testimoni-->

        <div class="row justify-content-center">
            <div class="col-lg-12 mt-4">
                <div class="tiny-three-item">
                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2">
                            <img src=" <?= base_url(); ?>/frontend/images/testimoni/01.jpg"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Kursus stir mobil disini sangat recommended sekali.
                                    Instrukturnya sangat profesional dalam mengajar. "</p>
                                <h6 class="text-primary">- Rizka Dianti <small class="text-muted">Polwan</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2">
                            <img src="<?= base_url(); ?>/frontend/images/testimoni/02.jpg"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Kursus Mengemudi dengan legalitas dan perijinan lengkap.
                                    Instruktur sabar dan kompeten serta bersertifikat. Kursus yang berijin dan
                                    tersertifikasi. "</p>
                                <h6 class="text-primary">- Ana Dewi <small class="text-muted">Polwan</small></h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" data-aos-duration=" 1800">
                            <img src="<?= base_url(); ?>/frontend/images/testimoni/03.jpg"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Pelayanan sangat memuaskan, instruktur juga sabar dalam
                                    mendampingi,rekomended buat yang mau belajar. "</p>
                                <h6 class="text-primary">- Eni Rina <small class="text-muted">Ibu Rumah Tangga</small>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" data-aos-duration=" 2200">
                            <img src="<?= base_url(); ?>/frontend/images/testimoni/04.jpg"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Lembaga sudah terakreditasi, bikin sim juga dibantu. "</p>
                                <h6 class="text-primary">- Rere Damayanti <small class="text-muted">Mahasiswi</small>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" data-aos-duration=" 2400">
                            <img src="<?= base_url(); ?>/frontend/images/testimoni/05.jpg"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Pelayanan sangat memuaskan, instruktur juga sabar dalam
                                    mendampingi,rekomended buat yang mau belajar. "</p>
                                <h6 class="text-primary">- Indah Wati <small class="text-muted">Ibu Rumah Tangga</small>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="tiny-slide">
                        <div class="d-flex client-testi m-2" data-aos-duration=" 2800">
                            <img src="<?= base_url(); ?>/frontend/images/testimoni/06.jpg"
                                class="avatar avatar-small client-image rounded shadow" alt="">
                            <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                </ul>
                                <p class="text-muted mt-2">" Kursus stir mobil terdepan dalam inovasi dan layanan.
                                    Pioneer sebagai lembaga pelatihan dan Alhamdulillah sudah terakreditasi. "</p>
                                <h6 class="text-primary">- Gabriella T <small class="text-muted">Ibu Rumah
                                        Tangga</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Col -->
        </div>
    </div>
</section>
<!-- END: Section Testimoni-->

<!-- BEGIN: Section Pertanyaan -->
<section class="section" id="pertanyaan">
    <div class="container">
        <!-- BEGIN: Judul Section Testimoni-->

        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="600">Tanyakan Kami Apapun</h4>
                    <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1000">Berikut
                        adalah pertanyaan yang sering diajukan kepada<span class="text-primary fw-bold"> kami</span>.
                    </p>
                </div>
            </div>
        </div>
        <!-- BEGIN: Row Pertanyaan -->
        <div class="row">
            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">Apakah biaya pelatihan dapat diangsur?</h5>
                        <p class="answer text-muted mb-0">Sangat bisa! biaya pelatihan dapat diangsur sesuai ketentuan.
                        </p>
                    </div>
                </div>
            </div>
            <!-- END: Col -->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">Apakah bisa memilih jadwal sendiri?</h5>
                        <p class="answer text-muted mb-0">Tentu saja bisa. Jadwal pelatihan ditentukan oleh siswa
                            sendiri
                            disesuaikan dengan paket yang diambil dan jadwal yang sudah ada.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">Apakah siswa saat pelatihan akan digabung ?</h5>
                        <p class="answer text-muted mb-0">Tidak, siswa latihan hanya ada 1 di dalam mobil bersama
                            instruktur, <br> <span class="fw-bold">1 Siswa = 1 Mobil</span>.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">Apakah boleh mengajak seseorang pada saat pelatihan?</h5>
                        <p class="answer text-muted mb-0">Demi keamanan bersama, tidak diperkenankan karena dapat
                            mengganggu konsentrasi siswa
                            maupun instruktur saat mengajar.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Row Pertanyaan -->
    </div>
    <!-- END: Container Pertanyaan -->
</section>
<!-- END: Section Pertanyaan-->

<!-- BEGIN: Section Contact -->
<section class="section pb-0" id="kontak">
    <!-- BEGIN: Container Contact -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="600">Kontak Kami</h4>
                    <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1000">Beritahu
                        <span class="text-primary fw-bold">kami</span> jika Anda memiliki pertanyaan, ingin memberi
                        komentar, atau ingin informasi lebih lanjut tentang LPK-LKP INDERA.
                    </p>
                </div>
            </div>
        </div>
        <!-- END: Row Judul Section Contact -->

        <!-- BEGIN: Row Form Section Contact -->
        <div class="row align-items-center">
            <!-- BEGIN: Kirim Pesan -->
            <div class="col-lg-5 col-md-6 mt-4 pt-2 order-2 order-md-1">
                <div class="card rounded shadow border-0">
                    <div class=" card-body">
                        <!-- BEGIN: Contact-Form -->
                        <div class="custom-form bg-white">
                            <div id="message"></div>
                            <form method="post" action="#" name="contact-form" id="contact-form">
                                <!-- BEGIN: Row Kirim Pesan -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Masukan Nama Anda <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" id="name" type="text" class="form-control ps-5"
                                                    placeholder="Nama Anda :">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Col Form Nama -->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Masukan Email Anda <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email2" type="email" class="form-control ps-5"
                                                    placeholder="Email Anda :">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Col Form Email -->
                                    <!-- BEGIN: Col Form Komentar -->
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Masukan Komentar</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="comments" id="comments" rows="4"
                                                    class="form-control ps-5" placeholder="Komentar Anda :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Col Form Komentar -->
                                </div>
                                <!-- END: Row Kirim Pesan -->
                                <!-- BEGIN: Row Tombol Kirim -->
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <div class="d-grid">
                                            <input type="submit" id="submit" name="send" class="btn btn-primary"
                                                value="Kirim Pesan">
                                            <div id="simple-msg"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Row Tombol Kirim -->
                            </form>
                        </div>
                        <!-- END: Row Contact-Form -->
                    </div>
                </div>
            </div>
            <!-- END: Kirim Pesan -->

            <!-- BEGIN: Contact Detail -->
            <div class="col-lg-7 col-md-6 mt-4 pt-2 order-1 order-md-2">
                <div class="title-heading ms-lg-4">
                    <h4 class="mb-4">Kontak Detail</h4>
                    <p class=" text-muted">Anda dapat juga dapat menghubungi
                        <span class="text-primary fw-bold">kami</span> di Alamat berikut :
                    </p>
                    <!-- BEGIN: Email -->
                    <div class="card border-0 bg-transparent">
                        <div class="card-body p-0">
                            <div class="contact-detail d-flex align-items-center mt-3" data-aos-duration=" 1200">
                                <div class="icon">
                                    <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                                </div>
                                <div class="content overflow-hidden d-block">
                                    <h6 class="fw-bold mb-0">Email</h6>
                                    <a href="mailto:kursusindera@gmail.com"
                                        class="text-primary">kursusindera@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Email -->
                    <!-- BEGIN: Phone -->
                    <div class="card border-0 bg-transparent">
                        <div class="card-body p-0">
                            <div class="contact-detail d-flex align-items-center mt-3" data-aos-duration=" 1000">
                                <div class="icon">
                                    <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                                </div>
                                <div class="content overflow-hidden d-block">
                                    <h6 class="fw-bold mb-0">Telepon</h6>
                                    <a href="tel:+62293587609" class="text-primary">0293-587609</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Phone -->

                    <div class="card border-0 bg-transparent">
                        <div class="card-body p-0">
                            <div class="contact-detail d-flex align-items-center mt-3" data-aos-duration=" 1000">
                                <div class="icon">
                                    <i class="fab fa-whatsapp fea icon-m-md text-dark me-3"></i>
                                </div>
                                <div class="content overflow-hidden d-block">
                                    <h6 class="fw-bold mb-0">Whatsapp</h6>
                                    <a href="https://wa.me/6282226213111" class="text-primary">0822-2621-3111</a>
                                    <br>
                                    <a href="https://wa.me/6281225539991" class="text-primary">0812-2553-9991</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Phone -->
                    <!-- BEGIN: Maps -->
                    <div class="card border-0 bg-transparent">
                        <div class="card-body p-0">
                            <div class="contact-detail d-flex align-items-center mt-3" data-aos-duration=" 1600">
                                <div class="icon">
                                    <i data-feather="map-pin" class="fea icon-m-md text-dark me-3"></i>
                                </div>
                                <div class="content overflow-hidden d-block">
                                    <h6 class="fw-bold mb-0">Alamat</h6>
                                    <a href="https://goo.gl/maps/CoN8xjWPM3kHMrxF8" class="text-primary">Lihat di Google
                                        Maps</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Maps -->
                </div>
            </div>
            <!-- END: Contact Detail -->
        </div>
    </div>
    <!-- END: Container Contact -->

    <!-- BEGIN: Google Maps -->
    <div class="container-fluid mt-100 mt-60">
        <div class="row">
            <div class="col-12 p-0">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.9705384891854!2d110.27777341409424!3d-7.57818577696272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8bb460dff8fb%3A0xfd5d996fd977499e!2sLPK%2FLKP%20INDERA!5e0!3m2!1sid!2sid!4v1626575399415!5m2!1sid!2sid"
                        style="border:0" allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Google Maps -->
</section>
<!-- END: Section Contact -->
<?= $this->endSection(); ?>