<div class="container">

    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex justify-justify-center align-items-center">
                    <img src="../assets/img/undraw_social_ideas_e8rj.svg" class="img-fluid d-block " alt="">
                </div>
                <div class="col-lg-4 px-2 pt-2">
                    <h1 class="font-weight-bold py-3">Registrasi Member</h1>
                    <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control my-2 p-2" id="name" name="name" placeholder="Nama" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" class="form-control my-2 p-2" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" class="form-control my-2 p-2" id="password1" name="password1" placeholder="Kata Sandi">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" class="form-control my-2 p-2" id="password2" name="password2" placeholder="Ulangi Kata Sandi">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 mt-3 mb-5">
                                    Daftar
                                </button>
                            </div>
                        </div>
                        <div>
                            <p>Sudah memiliki akun?<a href="<?= base_url('auth'); ?>">Klik disini untuk Login!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</section>
</div>