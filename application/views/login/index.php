<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title"
                    style="background-image: url(<?= base_url(); ?>assets/login/images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Masuk Dashboard Admin
                    </span>
                </div>
                <?= $this->session->flashdata('pesan'); ?>
                <form class="login100-form" method="POST">
                    <div class="wrap-input100 m-b-26">
                        <span class="label-input100">email</span>
                        <input class="input100" type="email" id="email" name="email" placeholder="Masukkan email"
                            value="<?= set_value('email'); ?>">

                    </div>
                    <?= form_error('email', '<small class="text-danger" style="margin-left: 0rem;">', '</small>'); ?>

                    <div class="wrap-input100 m-b-18">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" id="password" name="password"
                            placeholder="Masukkan password">

                    </div>
                    <?= form_error('password', '<small class="text-danger" style="margin-left: 0rem;">', '</small>'); ?>

                    <div class="flex-sb-m w-full p-b-30">
                        <div>
                            <a href="#" class="txt1">
                                Lupa Password?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>