<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div  class="col-md-4 col-md-offset-3">
            <h2>Data Pengguna</h2>
            <?php if(!empty($this->session->flashdata('status'))){ ?>
            <div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
            <?php } ?>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Data Pengguna
            </button>

           <!-- Modal Tambah Data-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?= base_url(). 'pengguna/tambah' ?>" method="POST">
                <div class="form-row">
                </div>
                    <div class="form-group ">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group ">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" >
                    </div>
                    <div class="form-group ">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                    </div>
                    <div class="form-group ">
                    <label">Nomor Telepon</label>
                    <input type="text" name="telepon" class="form-control">
                    </div>
                    <div class="form-group ">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                    <button type="reset" class="btn btn-danger btn-sm" >Reset</button>        
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </form>
                </div>
            </div>
            </div>
            
          </div>
           <!-- Modal Edit Data -->
           
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php foreach($pengguna as $user): ?>
                <div class="modal-body">
                <form action="<?= base_url(). 'pengguna/update' ?>" method="POST">
                <div class="form-row">
                </div>
                    <div class="form-group ">
                    <label>Nama</label>
                    <input type="hidden" name="nama" class="form-control" value="<?php echo $user->id_nama ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $user->nama ?>">
                    </div>
                    <div class="form-group ">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $user->email ?>">
                    </div>
                    <div class="form-group ">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $user->alamat ?>">
                    </div>
                    <div class="form-group ">
                    <label">Nomor Telepon</label>
                    <input type="text" name="telepon" class="form-control" value="<?php echo $user->telepon ?>">
                    </div>
                    <div class="form-group ">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo $user->password ?>">
                </div>
                    <button type="reset" class="btn btn-danger btn-sm" >Reset</button>        
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </form>
                </div>
            </div>
            <?php endforeach?>
        </div>
      
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-center">
                      <th> No </th>
                      <th> Nama </th>
                      <th> Email </th>
                      <th> Alamat </th>
                      <th> Nomor Telepon </th>
                      <th> Aksi </th>
                  </tr>
              </thead>
              <?php $no = 1;
              foreach($pengguna as $user): ?>
              <tbody>
                  <tr class="text-center">
                      <td> <?= $no++ ?> </td>
                      <td> <?= $user->nama ?> </td>
                      <td> <?= $user->email ?> </td>
                      <td> <?= $user->alamat ?> </td>
                      <td> <?= $user->telepon ?> </td>
                      <td>
                      <form action="<?= base_url(). 'pengguna/edit_data/'.$user->id_nama ?>" method="POST">
                          <button  type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal1">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </button>
                      <form action="<?= base_url(). 'pengguna/hapus_data/'.$user->id_nama ?>" method="POST">
                          <button class="btn btn-danger btn-sm" onclick="javascripst: return confirm('Anda yakin menghapus data?')">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                          </button>
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