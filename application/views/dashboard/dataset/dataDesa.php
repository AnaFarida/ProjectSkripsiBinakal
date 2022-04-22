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
                                 onclick="confirm_modal('<?= base_url('datadbd/hapus/' . $datadb->id_data) ?>')" href=""
                                 type="button" data-toggle="modal" data-target="#deleteModal">
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