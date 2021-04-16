<div class="container">
    <section class="form my-4 mx-5">
        <div class="container">

            <div class="row">
                <div class="text-center">
                    <h1 class="font-weight-bold py-10">Lupa Kata Sandi</h1>


                    <?= $this->session->flashdata('message'); ?>

                    <form class="user" method="post" action="<?= base_url('auth/forgotpassword'); ?>">
                        <p>Verifikasi sandi baru via email</p>
                        <div class="form-row">
                            <div class="col-lg-12">
                                <input type="text" class="form-control mt-2 text-center" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn1 mt-3 mb-3">
                                    Kirim
                                </button>
                            </div>
                        </div>
                        <div>
                            <a class="small" href="<?= base_url('auth'); ?>">Kembali login!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>