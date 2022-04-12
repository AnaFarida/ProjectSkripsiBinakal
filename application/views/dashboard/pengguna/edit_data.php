<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-4 col-md-offset-3">
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data Pengguna</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="<?= base_url('Pengguna/update/' . $detail[0]->id_nama) ?>" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nama" class="form-control-label">Nama Lengkap</label>
                                <input type="hidden" name="id_nama" id="id_nama" class="form-control"
                                    placeholder="Masukkan nama ..." value="<?= $detail[0]->id_nama; ?>">
                                <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="Masukkan nama ..." value="<?= $detail[0]->nama; ?>">
                                <?= form_error('nama', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email" class="form-control-label">Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="Masukkan email ..." value="<?= $detail[0]->email; ?>">
                                <?= form_error('email', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="alamat" class="form-control-label">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control"
                                    placeholder="Masukkan alamat ..." value="<?= $detail[0]->alamat; ?>">
                                <?= form_error('alamat', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nohp" class="form-control-label">Telepon</label>
                                <input type="text" name="nohp" id="nohp" class="form-control"
                                    placeholder="Masukkan no telepon ..." value="<?= $detail[0]->telepon; ?>">
                                <?= form_error('nohp', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password1" class="form-control-label">Password</label>
                                <input type="password" name="password1" id="password1" class="form-control"
                                    placeholder="Masukkan password ...">
                                <?= form_error('password1', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password2" class="form-control-label">Konfirmasi Password</label>
                                <input type="password" name="password2" id="password2" class="form-control"
                                    placeholder="Masukkan konfirmasi password ...">
                                <?= form_error('password2', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="<?= base_url('Pengguna/') ?>" class="btn btn-icon btn-danger" type="submit"
                                style="margin-bottom: 0px">
                                <span class="btn-inner--icon"><i class="fas fa-arrow-left"></i></span>
                                <span class="btn-inner--text">Kembali</span>
                            </a>
                            <button class="btn btn-icon btn-info" type="submit">
                                <span class="btn-inner--icon"><i class="fas fa-save"></i></span>
                                <span class="btn-inner--text">Simpan</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>