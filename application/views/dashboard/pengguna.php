<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-12 col-md-offset-3">
                    <?php if (!empty($success_msg)) { ?>
                    <?php echo $success_msg; ?>
                    <?php if (!empty($error_msg)) { ?>
                    <?php echo $error_msg; ?>
                    <?php } ?>
                    <?php } ?>
                    <h2>Data Admin</h2>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data Admin
                    </button>

                    <!-- Modal Hapus -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus
                                        data?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Tekan batal untuk kembali, dan tekan hapus untuk menghapus data
                                </div>
                                <div class="modal-footer" style="margin: 0rem;">
                                    <a type="button" class="btn btn-danger text-white" data-dismiss="modal"
                                        style="margin-bottom: .25rem;">Batal</a>
                                    <a href="" id="delete_link" type="button" class="btn btn-primary">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Tambah Data-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data pengguna</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('Pengguna/tambah') ?>" method="POST">
                                        <div class="form-row">
                                        </div>
                                        <div class="form-group ">
                                            <label>Nama</label>
                                            <input type="text" name="nama" id="nama" class="form-control"
                                                placeholder="Masukkan nama lengkap ...">
                                            <?= form_error('nama', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group ">
                                            <label>Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Masukkan email ...">
                                            <?= form_error('email', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group ">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" id="alamat" class="form-control"
                                                placeholder="Masukkan alamat ...">
                                            <?= form_error('alamat', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group ">
                                            <label>Nomor Telepon</label>
                                            <input type="text" name="telepon" id="telepon" class="form-control"
                                                placeholder="Masukkan no telepon ...">
                                            <?= form_error('telepon', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group ">
                                            <label>Password</label>
                                            <input type="password" name="password1" id="password1" class="form-control"
                                                placeholder="Masukkan password ...">
                                            <?= form_error('password1', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group ">
                                            <label>Konfirmasi Password</label>
                                            <input type="password" name="password2" id="password2" class="form-control"
                                                placeholder="Masukkan konfirmasi password ...">
                                            <?= form_error('password2', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                        </div>
                                        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th> No </th>
                            <th> Nama </th>
                            <th> Email </th>
                            <th> Status </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <?php if (!empty($penggunaAll)) {
                         $no = 1;
                    foreach ($penggunaAll as $user) {?>
                    <tbody>
                        <tr class="text-center">
                            <td> <?= $no++ ?> </td>
                            <td> <?= $user->nama ?> </td>
                            <td> <?= $user->email ?> </td>
                            <td>
                                <?php
                                if ($user->is_active == 0) {
                                    echo '<span class="badge badge-danger"> Tidak Aktif</span>';
                                } elseif ($user->is_active == 1) {
                                    echo '<span class="badge badge-success">Aktif</span>';
                                }
                                 ?>
                            </td>
                            <td>
                                <a href="<?= base_url('Pengguna/detail/' . $user->id_nama) ?>"
                                    class="btn btn-primary btn-sm" type="button">
                                    <i class="fas fa-address-card"></i> Detail
                                </a>
                                <a href="<?= base_url('Pengguna/update/' . $user->id_nama) ?>" type="button"
                                    class="btn btn-info btn-sm">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a href="" class="btn btn-danger btn-sm"
                                    onclick="confirm_modal('<?= base_url('Pengguna/delete/' . $user->id_nama) ?>')"
                                    type="button" data-toggle="modal" data-target="#deleteModal">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        <?php 
                        } ?>
                        <?php } else { ?>
                        <?php } ?>
                    </tbody>
                </table>
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
<script type="text/javascript">
function confirm_modal(delete_url) {
    $('#deleteModal').modal('show', {
        backdrop: 'static'
    });
    document.getElementById('delete_link').setAttribute('href', delete_url);
}
</script>