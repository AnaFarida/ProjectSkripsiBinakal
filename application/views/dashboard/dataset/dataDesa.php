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
                </div>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Penanggulangan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th> No </th>
                            <th> Desa </th>
                            <th> Geojson </th>
                            <th> Latitude</th>
                            <th> Longitude</th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                foreach ($desa as $datadb) : ?>
                        <tr class="text-justify" border="1" width="500px">
                            <td> <?= $no++ ?> </td>
                            <td> <?= $datadb->nama_desa ?> </td>
                            <td> <?= $datadb->geojson ?> </td>
                            <td> <?= $datadb->latitude ?> </td>
                            <td> <?= $datadb->longtitude ?> </td>
                            <td>
                                <a href="<?= base_url('Admin/Desa/update/' . $datadb->id_desa) ?>" type="button"
                                    class="btn btn-info btn-sm">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a href="" class="btn btn-danger btn-sm"
                                    onclick="confirm_modal('<?= base_url('Admin/Desa/delete/' . $datadb->id_desa) ?> ?>')"
                                    type="button" data-toggle="modal" data-target="#deleteModal">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
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