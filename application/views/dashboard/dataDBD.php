<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div  class="col-md-4 col-md-offset-3">
            <h2>Data Program PSN</h2>
			<?php if(!empty($this->session->flashdata('status'))){ ?>
			<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Data DBD
            </button>

           <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data DBD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form>
               
                <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputBulan">Bulan</label>
                    <select id="inputBulan" class="form-control">
                        <option selected>Pilih...</option>
                        <option>...</option>
                    </select>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputTahun">Tahun</label>
                    <select id="inputTahun" class="form-control">
                        <option selected>Pilih...</option>
                        <option>...</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputDesa">Desa</label>
                    <select id="inputDesa" class="form-control">
                        <option selected>Pilih Desa...</option>
                        <option>...</option>
                    </select>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputPenderita">Jumlah Penderita</label>
                    <input type="text" class="form-control" id="inputPenderita">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputMeninggal">Jumlah Meninggal</label>
                    <input type="text" class="form-control" id="inputMeninggal">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data DBD</h3>

          <div class="card-tools">
        <input type="text" class="form-control" placeholder="Cari Data" aria-label="Cari Data" aria-describedby="basic-addon2">
            <button type="button" class="btn btn-tool" >
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          No
                      </th>
                      <th style="width: 15%">
                         Desa
                      </th>
                      <th style="width: 15%">
                        Bulan
                      </th>
                      <th style="width: 15%">
                      Jumlah Penderita
                      </th>
                      <th style="width: 15%" >
                      Jumlah Meninggal
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                              AdminLTE v3
                          </a>
                          <br/>
                          <small>
                              Created 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="<?= base_url('') ?>assets/dist/img/avatar.png">
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                              57% Complete
                          </small>
                      </td>
                      <td class="project-state">
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                          </a>
                      </td>
                  </tr>
              
                
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

