<?= $this->extend('auth/layout'); ?>
<?= $this->section('title'); ?>
<title>Daftar - Kursus Mengemudi Indera</title>
<?= $this->endSection() ?>
<?= $this->section('content'); ?>

<div class="back-to-home rounded d-none d-sm-block">
    <a href="<?= site_url('auth') ?>" class="btn btn-icon btn-primary">
        <i class="fad fa-home-alt icons"></i></a>
</div>

<section class="bg-auth-home bg-circle-gradiant d-table w-100">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="card shadow rounded border-0 mt-4">
                    <div class="card-body">
                        <h3 class="card-title mb-1"><?= lang('Auth.registerTitle') ?></h3>
                        <p class="card-text mb-2"><?= lang('Auth.registerText') ?></p>
                        <?= view('auth/_message_block') ?>
                        <form class="login-form mt-4" action="<?= route_to('register') ?>" method="post">
                            <?= csrf_field() ?>

                            <!-- BEGIN: Nama Lengkap-->
                            <div class="form-floating mb-2">
                                <input type="text" name="nama" id="floatingInput"
                                    placeholder="<?= lang('Auth.namaLengkap') ?>"
                                    class="form-control <?php if (session('errors.nama')) : ?>is-invalid<?php endif ?>"
                                    value="<?= old('nama') ?>" autofocus>
                                <label for="nama"><?= lang('Auth.namaLengkap') ?></label>
                            </div>
                            <!-- END: Nama Lengkap-->

                            <!-- BEGIN: Email-->
                            <div class="form-floating mb-2">
                                <input type="email" name="email"
                                    class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                    id="floatingEmail" placeholder="<?= lang('Auth.email') ?>"
                                    value="<?= old('email') ?>">
                                <label for="floatingEmail"><?= lang('Auth.emailAddress') ?></label>
                            </div>
                            <!-- END: Email-->

                            <!-- BEGIN: Username-->
                            <div class="form-floating mb-2">
                                <input type="text" name="username" id="floatingInput"
                                    class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"
                                    placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                <label for="floatingInput"><?= lang('Auth.username') ?></label>
                            </div>
                            <!-- END: Username-->

                            <!-- BEGIN: Password-->
                            <div class="form-floating mb-2">
                                <input type="password" name="password" autocomplete="off"
                                    class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                    id="floatingPassword" placeholder="<?= lang('Auth.password') ?>">
                                <label for="password"><?= lang('Auth.password') ?></label>
                            </div>
                            <!-- END: Password-->

                            <!-- BEGIN: Konfirmasi Password-->
                            <div class="form-floating mb-2">
                                <input type="password" name="pass_confirm" autocomplete="off"
                                    class="form-control  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                    id="floatingPassword" placeholder="<?= lang('Auth.repeatPassword') ?>">
                                <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>

                            </div>
                            <!-- END: Konfirmasi Password-->

                            <!-- BEGIN: Syarat & Ketentuan-->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Saya Menerima
                                            <a href="javascript: void(0);" class="text-primary">Syarat &
                                                Ketentuan</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Syarat & Ketentuan-->

                            <!-- BEGIN: Tombol Daftar-->
                            <div class="col-md-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary"><?= lang('Auth.register') ?></button>
                                </div>
                            </div>
                            <!-- END: Tombol Daftar-->

                            <!-- BEGIN: Sudah Memiliki Akun-->
                            <div class="mx-auto">
                                <p class="mb-0 mt-3">
                                    <small class="text-dark me-1"><?= lang('Auth.alreadyRegistered') ?></small>
                                    <a href="<?= route_to('login') ?>" class="text-primary fw-bold">
                                        <?= lang('Auth.signInHere') ?>
                                    </a>
                                </p>
                            </div>
                            <!-- END: Sudah Memiliki Akun-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>