<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addVideo" data-title="Tambah Photoshop" data-button="Add">Tambah Photoshop</a>

            <div class="row">
                <div class="col-md-5">
                    <form action="<?= base_url('video'); ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search keyword.." name="keyword">
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Link</th>
                        <th scope="col">Type</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php if (empty($page)) : ?>
                        <tr>
                            <td colspan="7">
                                <div class="alert alert-danger" role="alert">
                                    Data not found!
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>

                    <?php $i = $start + 1; ?>
                    <?php foreach ($page as $ps) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $ps['judul']; ?></td>
                            <td><?= $ps['link']; ?></td>
                            <td><?= $ps['type']; ?></td>
                            <td><?= $ps['kelas']; ?></td>
                            <td><?= $ps['deskripsi']; ?></td>
                            <td>
                                <a href="" class="badge badge-success" data-toggle="modal" data-target="#addVideo" data-title="Edit Photoshop" data-button="Edit" data-judul="<?= $ps['judul']; ?>" data-link="<?= $ps['link']; ?>" data-type="<?= $ps['type']; ?>" data-kelas="<?= $ps['kelas']; ?>" data-deskripsi="<?= $ps['deskripsi']; ?>" data-id="<?= $ps['id']; ?>">edit</a>
                                <a href="<?= base_url('video/deleteVideo'); ?>/<?= $ps['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin hapus &quot;<?= $ps['judul']; ?>&quot; ?')">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>

    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="addVideo" tabindex="-1" role="dialog" aria-labelledby="addVideoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addVideoLabel">Add New Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('video'); ?>" method="post">
                <div class="modal-body">
                    <input type="text" class="form-control" id="id" name="id" hidden>
                    <div class="form-group">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="link" name="link" placeholder="Link">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="type" name="type" value="photoshop">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="kelas" name="kelas">
                            <option>Pilih Kelas</option>
                            <option value="free">Free</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary action">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>