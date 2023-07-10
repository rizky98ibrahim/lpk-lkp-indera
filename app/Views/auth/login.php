<?= $this->extend('auth/layout'); ?>
<?= $this->section('title'); ?>
<title>Masuk ke Akun - Kursus Mengemudi Indera</title>
<?= $this->endSection() ?>
<?= $this->section('content'); ?>

<div class="back-to-home rounded d-none d-sm-block">
    <a href="<?= site_url('') ?>" class="btn btn-icon btn-primary">
        <i class="fad fa-home-alt icons"></i></a>
</div>

<section class="bg-auth-home bg-circle-gradiant d-table w-100">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form-signin p-4 bg-white rounded shadow">
                    <h3 class="card-title mb-1"><?= lang('Auth.loginTitle') ?></h3>
                    <p class="card-text mb-2"><?= lang('Auth.loginText') ?></p>
                    <?= view('auth/_message_block') ?>
                    <form class="login-form mt-4" action="<?= route_to('login') ?>" method="post">
                        <?= csrf_field() ?>

                        <!-- BEGIN: Email & Username-->
                        <?php if ($config->validFields === ['email']) : ?>
                        <div class="form-floating mb-2">
                            <input type="email" name="login"
                                class="form-control  <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                id="floatingInput" placeholder="<?= lang('Auth.email') ?>">
                            <label for="login"><?= lang('Auth.email') ?></label>
                        </div>
                        <?php else : ?>
                        <div class="form-floating mb-2">
                            <input type="text" name="login"
                                class="form-control  <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                id="floatingInput" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                            <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                        </div>
                        <?php endif; ?>
                        <!-- END: Email & Username-->

                        <!-- BEGIN: Password-->
                        <div class="form-floating mb-3">
                            <input type="password" name="password"
                                class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                id="floatingPassword" placeholder="<?= lang('Auth.password') ?>">
                            <label for="password"><?= lang('Auth.password') ?></label>
                        </div>
                        <!-- END: Password-->

                        <!-- BEGIN: Ingat Saya & Lupa Password-->
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between">
                                <!-- BEGIN: Ingat Saya-->
                                <div class="mb-3">
                                    <?php if ($config->allowRemembering) : ?>
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" class="form-check-input"
                                            <?php if (old('remember')) : ?> checked <?php endif ?>
                                            id="flexCheckDefault">
                                        <label class="form-check-label"
                                            for="flexCheckDefault"><?= lang('Auth.rememberMe') ?></label>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <!-- END: Ingat Saya-->

                                <!-- BEGIN: Lupa Password-->
                                <?php if ($config->activeResetter) : ?>
                                <p class="forgot-pass mb-0">
                                    <a href="<?= route_to('forgot') ?>" class="text-dark small fw-bold">
                                        <?= lang('Auth.forgotYourPassword') ?></a>
                                </p>
                                <?php endif; ?>
                                <!-- END: Lupa Password-->
                            </div>
                        </div>
                        <!-- END: Ingat Saya & Lupa Password-->

                        <!-- BEGIN: Tombol Login-->
                        <div class="col-lg-12 mb-0">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary"><?= lang('Auth.signIn') ?></button>
                            </div>
                        </div>
                        <!-- END: Tombol Login-->

                        <!-- BEGIN: Tombol Daftar-->
                        <div class="col-12 text-center">
                            <?php if ($config->allowRegistration) : ?>
                            <p class="mb-0 mt-3"><small class="text-dark me-1"><?= lang('Auth.needAnAccount') ?></small>
                                <a href="<?= route_to('register') ?>"
                                    class="text-primary small fw-bold"><?= lang('Auth.registerAccount') ?></a>
                            </p>
                            <?php endif; ?>
                        </div>
                        <!-- END: Tombol Daftar-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>