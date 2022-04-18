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
                    <h2>Data datadbd</h2>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data DBD
                    </button>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDesa">
                        Tambah Desa
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

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data DBD</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('DataDBD/tambahdata') ?>" method="POST">
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label>Desa</label>
                                                <select id="id_desa" name="nama_desa" class="form-control">
                                                    <?php foreach ($desa as $datadb) { ?>
                                                    <option value="<?= $datadb->id_desa; ?>"><?= $datadb->nama_desa ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                            <!-- 
                                            <div class="form-group col-md-4">
                                                <label for="inputTahun">Tahun</label>
                                                <select id="tahun" name="tahun" class="form-control">
                                                    <option selected>Pilih Tahun...</option>
                                                    <?php
                                                    $mulai = date('Y') - 10;
                                                    for ($i = $mulai; $i < $mulai + 15; $i++) {
                                                        $sel = $i == date('Y') ? ' selected="selected"' : '';
                                                        echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div> -->
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Jumlah Penderita</label>
                                                <input type="number" class="form-control" id="jml_penderita"
                                                    name="jml_penderita">
                                                <?= form_error('jml_penderita', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label">Jumlah Meninggal</label>
                                                    <input type="number" class="form-control" id="jml_meninggal"
                                                        name="jml_meninggal">
                                                    <?= form_error('jml_meninggal', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="modalDesa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data DBD</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('DataDBD/tambahdesa') ?>" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label>Desa</label>
                                            <input type="text" class="form-control" id="nama_desa" name="nama_desa">
                                            <?= form_error('nama_desa', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label>Geojson</label>
                                            <input type="text" class="form-control" id="geojson" name="geojson">
                                            <?= form_error('geojson', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label>Latitude</label>
                                            <input type="text" class="form-control" id="latitude" name="latitude">
                                            <?= form_error('latitude', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label>Longtitude</label>
                                            <input type="text" class="form-control" id="longtitude" name="longtitude">
                                            <?= form_error('longtitude', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data DBD Puskesmas Binakal</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th> No </th>
                            <th> Desa </th>
                            <th> Jumlah Penderita </th>
                            <th> Jumlah Meninggal </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($datadbd as $datadb) : ?>
                        <tr class="text-center">
                            <td> <?= $no++ ?> </td>
                            <td> <?= $datadb->nama_desa ?> </td>
                            <td> <?= $datadb->jml_penderita ?> </td>
                            <td> <?= $datadb->jml_meninggal ?> </td>
                            <td>
                                <a href="<?= base_url('datadbd/editdata/' . $datadb->id_data) ?>" type="button"
                                    class="btn btn-info btn-sm">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm"
                                    onclick="confirm_modal('<?= base_url('datadbd/hapus/' . $datadb->id_data) ?>')"
                                    href="" type="button" data-toggle="modal" data-target="#deleteModal">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>

                </table>
            </div>

        </div>
        <!-- /.card-body -->
</div>
</section>
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