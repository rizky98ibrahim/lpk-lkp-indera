<?= $this->extend('auth/layout'); ?>
<?= $this->section('title'); ?>
<title>Lupa Password - Kursus Mengemudi Indera</title>
<?= $this->endSection() ?>
<?= $this->section('content'); ?>

<div class="back-to-home rounded d-none d-sm-block">
    <a href="<?= site_url('auth') ?>" class="btn btn-icon btn-primary">
        <i class="fad fa-home-alt icons"></i></a>
</div>

<section class="bg-home bg-circle-gradiant d-flex align-items-center">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="card shadow rounded border-0">
                    <div class="card-body">
                        <h3 class="card-title mb-1"><?= lang('Auth.forgotTitle') ?></h3>
                        <p class="card-text mb-2"><?= lang('Auth.forgotText') ?></p>
                        <?= view('auth/_message_block') ?>
                        <form class="login-form mt-4" action="<?= route_to('forgot') ?>" method="post">
                            <?= csrf_field() ?>
                            <!-- BEGIN: Email Lupa Password-->
                            <div class="form-floating mb-3">
                                <input type="email" name="email"
                                    class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                    id="floatingEmail" placeholder="<?= lang('Auth.email') ?>"
                                    value="<?= old('email') ?>">
                                <label for="floatingEmail"><?= lang('Auth.emailAddress') ?></label>
                            </div>
                            <!-- END: Email Lupa Password-->

                            <!-- BEGIN: Kirim Instruksi-->
                            <div class="col-lg-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary mb-2">
                                        <?= lang('Auth.sendInstructions') ?></button>
                                </div>
                            </div>
                            <!-- END: Kirim Instruksi-->

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