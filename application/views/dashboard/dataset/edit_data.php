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
                <h3 class="card-title">Edit Data DBD</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="<<?= base_url('DataDBD/editdata/' . $detail->id_desa) ?>" method="POST">
                    <input type="hidden" name="id_desa" value="<?= $detail->id_desa?>">
                    <input type="hidden" name="id_data" value="<?= $detail->id_data?>">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nama" class="form-control-label">Desa</label>
                                <input class="form-control" name="nama_desa" type="text"
                                    value="<?= $detail->nama_desa ?>" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jumlah Penderita</label>
                                <input type="number" class="form-control" name="jml_penderita"
                                    value="<?= $detail->jml_penderita ?>"></td>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jumlah Meninggal</label>
                                <input type="number" class="form-control" name="jml_meninggal"
                                    value="<?= $detail->jml_meninggal ?>"></td>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <a href="<?= base_url('DataDBD/') ?>" class="btn btn-icon btn-danger" type="submit"
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