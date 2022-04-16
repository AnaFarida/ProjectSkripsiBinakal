<!-- Main content -->
<div class="content-wrapper">
    <section class="content">
        <div class="col-md-12 col-md-offset-3">
            <?php if (!empty($success_msg)) { ?>
            <?php echo $success_msg; ?>
            <?php if (!empty($error_msg)) { ?>
            <?php echo $error_msg; ?>
            <?php } ?>
            <?php } ?>
            <h2>Detail Profil Admin</h2>
            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-12 col-sm-6 align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                                <div class="card-header text-muted border-bottom-0">
                                    Detail Profil
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <?php foreach ($penggunaAll as $user) : ?>
                                            <h2 class="lead"><b>
                                                    <p><?= $user->nama; ?></p>
                                                </b></h2>
                                            <p class="text-muted text-sm"><b>Email: </b> <?= $user->email; ?></p>
                                            <p class="text-muted text-sm"><b>Status: </b> <?php
                                                        if ($user->is_active == 0) {
                                                            echo '<span class="badge badge-danger">Non - Aktif</span>';
                                                        } elseif ($user->is_active == 1) {
                                                            echo '<span class="badge badge-success">Aktif</span>';
                                                        }
                                                        ?></p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-building"></i></span>
                                                    Alamat:<?= $user->alamat; ?></li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fas fa-lg fa-phone"></i></span>
                                                    No Telepon #: + <?= $user->telepon; ?></li>
                                            </ul>
                                            <br>
                                            <p class="text-muted text-sm"><b>Dibuat: </b> <?= $user->created; ?> </p>
                                            <?php endforeach ?>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="<?= base_url('assets/img/profile/admin.png')?>" alt="user-avatar"
                                                class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <button class="btn btn-icon btn-success" type="submit" name="aktif"
                                            id="aktif"><i class="fas fa-check"></i></span>
                                            <span>Aktifkan</span>
                                        </button>
                                        <button class="btn btn-icon btn-danger" type="submit" name="mati" id="mati"><i
                                                class="fas fa-minus"></i></span>
                                            <span>Non-Aktifkan</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->