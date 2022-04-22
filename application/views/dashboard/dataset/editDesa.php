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
                <h3 class="card-title">Edit Data Desa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="<?= base_url('Admin/Desa/update/' . $detaildesa[0]->id_desa) ?>" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nama" class="form-control-label">Desa</label>
                                <input class="form-control" id="id_desa" name="id_desa" type="hidden"
                                    value="<?= $detaildesa[0]->id_desa; ?>">
                                <input class="form-control" name="nama_desa" id="nama_desa" type="text"
                                    value="<?= $detaildesa[0]->nama_desa; ?>" readonly>
                                <?= form_error('nama_desa', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>

                            </div>
                        </div>
                        <div class="col-7">
                            <div class="form-group">
                                <label for="geojson">Geojson</label>
                                <textarea id="geojson" name="geojson" rows="3" cols="70">
                                        <?= $detaildesa[0]->geojson; ?>
                                </textarea>
                                <?= form_error('geojson', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" class="form-control" id="latitude" name="latitude"
                                    value="<?= $detaildesa[0]->latitude; ?>">
                                <?= form_error('latitude', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Longtitude</label>
                                <input type="text" class="form-control" id="longtitude" name="longtitude"
                                    value="<?= $detaildesa[0]->longtitude; ?>">
                                <?= form_error('nama_desa', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                                <?= form_error('longtitude', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="<?= base_url('Admin/Desa/') ?>" class="btn btn-icon btn-danger" type="submit"
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
<