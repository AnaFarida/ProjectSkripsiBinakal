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
                    <h2>Penanggulangan dan Pencegahan DBD</h2>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Penanggulangan dan Pencegahan DBD
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
                                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Penanggulangan dan
                                        Pencegahan DBD</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('Admin/Penanggulangan/tambah') ?>" method="POST">
                                        <div class="form-row">
                                        </div>
                                        <div class="form-group ">
                                            <label>Pencegahan & Penanggulangan</label>
                                            <input type="text" name="penanggulangan" id="penanggulangan"
                                                class="form-control"
                                                placeholder="Masukkan Pencegahan & Penanggulangan ...">
                                            <?= form_error('penanggulangan', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
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
                <h3 class="card-title">Data Penanggulangan dan Pencegahan DBD </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th> No </th>
                            <th> Penanggulangan dan Pencegahan</th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <?php $no = 1;
          foreach ($penanggulangan as $datapng) : ?>
                    <tbody>
                        <tr>
                            <td> <?= $no++ ?> </td>
                            <td> <?= $datapng->penanggulangan ?> </td>
                            <td>
                                <a href="<?= base_url('Admin/Penanggulangan/update/' . $datapng->id_pnglngan) ?>"
                                    type="button" class="btn btn-info btn-sm">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a href="" class="btn btn-danger btn-sm"
                                    onclick="confirm_modal('<?= base_url('Admin/Penanggulangan/delete/' . $datapng->id_pnglngan) ?> ?>')"
                                    type="button" data-toggle="modal" data-target="#deleteModal">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach ?>
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