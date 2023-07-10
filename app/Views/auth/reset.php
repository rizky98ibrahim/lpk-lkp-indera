<?= $this->extend('auth/layout'); ?>
<?= $this->section('title'); ?>
<title>Reset Password - Kursus Mengemudi Indera</title>
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
                        <h3 class="card-title mb-1"><?= lang('Auth.resetYourPassword') ?></h3>
                        <p class="card-text mb-2"><?= lang('Auth.enterCodeEmailPassword') ?></p>
                        <?= view('auth/_message_block') ?>
                        <form class="login-form mt-4" action="<?= route_to('reset-password') ?>" method="post">
                            <?= csrf_field() ?>

                            <!-- BEGIN: Kode Token-->
                            <div class="form-floating mb-2">
                                <input type="text" name="token" id="floatingInput"
                                    placeholder="<?= lang('Auth.kodeToken') ?>"
                                    class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>"
                                    value="<?= old('token', $token ?? '') ?>" autofocus>
                                <label for="token"><?= lang('Auth.kodeToken') ?></label>
                            </div>
                            <!-- END: Kode Token-->

                            <!-- BEGIN: Email-->
                            <div class="form-floating mb-2">
                                <input type="email" name="email"
                                    class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                    id="floatingEmail" placeholder="<?= lang('Auth.email') ?>"
                                    value="<?= old('email') ?>">
                                <label for="floatingEmail"><?= lang('Auth.emailAddress') ?></label>
                            </div>
                            <!-- END: Email-->

                            <!-- BEGIN: Password-->
                            <div class="form-floating mb-2">
                                <input type="password" name="password" autocomplete="off"
                                    class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                    id="floatingPassword" placeholder="<?= lang('Auth.password') ?>">
                                <label for="password"><?= lang('Auth.password') ?></label>
                            </div>
                            <!-- END: Password-->

                            <!-- BEGIN: Konfirmasi Password-->
                            <div class="form-floating mb-3">
                                <input type="password" name="pass_confirm" autocomplete="off"
                                    class="form-control  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                    id="floatingPassword" placeholder="<?= lang('Auth.repeatPassword') ?>">
                                <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                            </div>
                            <!-- END: Konfirmasi Password-->

                            <!-- BEGIN: Tombol Ubah Password-->
                            <div class="col-md-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary mb-2">
                                        <?= lang('Auth.resetButton') ?></button>
                                </div>
                            </div>
                            <!-- END: Tombol Ubah Password-->

                            <!-- BEGIN: Ingat Password-->
                            <div class="mx-auto">
                                <p class="mb-0 mt-3">
                                    <small class="text-dark me-1"><?= lang('Auth.rememberPassword') ?></small>
                                    <a href="<?= route_to('login') ?>" class="text-primary fw-bold">
                                        <?= lang('Auth.signIn') ?></a>
                                </p>
                            </div>
                            <!-- END: Ingat Password-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>