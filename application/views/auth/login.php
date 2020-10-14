<div class="container">

    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex justify-justify-center align-items-center">
                    <img src="assets/img/undraw_social_ideas_e8rj.svg" class="img-fluid d-block " alt="">
                </div>
                <div class="col-lg-4 px-2 pt-2">
                    <h1 class="font-weight-bold py-3">Masuk</h1>
                    <?= $this->session->flashdata('message'); ?>

                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control form-control-user my-3 p-3" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" class="form-control form-control-user " id="password" name="password" placeholder="Kata Sandi">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 btn-dark btn-user btn-block mt-3 mb-5">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                    <div>
                        <a href="<?= base_url('auth/forgotpassword'); ?>">Lupa Kata Sandi?</a>
                    </div>
                    <div>
                        <p>Belum Memiliki Akun?<a href="<?= base_url('auth/registration'); ?>">Buat disini!</a></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>