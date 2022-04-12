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
                <h3 class="card-title">Edit Data Penanggulangan dan Pencegahan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="<?= base_url('Admin/Penanggulangan/update/' . $detail[0]->id_pnglngan) ?>" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nama" class="form-control-label">Penanggulangan dan Pencegahan</label>
                                <input type="hidden" name="id_pnglngan" id="id_pnglngan" class="form-control"
                                    placeholder="Masukkan nama ..." value="<?= $detail[0]->id_pnglngan; ?>">
                                <input type="text" name="penanggulangan" id="penanggulangan" class="form-control"
                                    placeholder="Masukkan penanggulangan ..."
                                    value="<?= $detail[0]->penanggulangan; ?>">
                                <?= form_error('penanggulangan', '<small style="padding-left: 0; margin-left: 0;" class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="<?= base_url('Admin/Penanggulangan/') ?>" class="btn btn-icon btn-danger" type="submit"
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