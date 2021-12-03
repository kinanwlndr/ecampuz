<script src='https://www.google.com/recaptcha/api.js'></script>
<title> Halaman Login </title>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>

                                    <br>
                                </div>

                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?php echo base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>"> <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class=" form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6Le6HFIcAAAAAPMPQIVcWWsOECI0y6hxZR-yqyrq"></div>
                                    </div>

                                    <!-- <div class="form-group">
                                        <div class="form-group">
                                            <input type="text" id="captcha" name="captcha" class="form-control form-control-user" placeholder="Captcha">
                                        </div>
                                    </div>

                                    <div align="center" class="form-group">
                                    <?php echo $captcha['image']; ?>
                                    </div> -->


                                    <br>
                                    <!-- <?php if (validation_errors()) {
                                                echo validation_errors();
                                            } ?>
                                    <form action="<?php echo base_url('captcha/check_captcha'); ?>" method="post">
                                        <?php echo $captcha; ?>
                                        <div class=" form-group">
                                        Masukan kode captcha
                                        <input type="text" name="captcha">
                                        </div> -->

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>