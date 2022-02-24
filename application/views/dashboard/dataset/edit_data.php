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
                <form action="<?php echo base_url(); ?>DataDBD/editdata" method="POST">
                    <input type="hidden" name="id_desa" value="<?= $desa->id ?>">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nama" class="form-control-label">Desa</label>
                                <select name="id_desa" id="id_desa" value="">
                                    <?php foreach ($datadbd as $datadb) : ?>
                                        <option <?php if ($desa->id == $datadb->id_desa) 
                                                { echo 'selected="selected"';
                                                } ?> value="<?= $datadb->id_desa; ?>"><?= $datadb->nama_desa; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email" class="form-control-label">Tahun</label>
                                <select name="tahun" id="kd" value="">
                                    <?php foreach ($datadbd as $datadb) : ?>
                                        <option><?= $datadb->tahun; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jumlah Penderita</label>
                                <input type="number" name="jml_penderita" value="<?= $datadb->jml_penderita ?>"></td>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jumlah Meninggal</label>
                                <input type="number" name="jml_meninggal" value="<?= $datadb->jml_meninggal ?>"></td>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <a href="<?= base_url('Pengguna/') ?>" class="btn btn-icon btn-danger" type="submit" style="margin-bottom: 0px">
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