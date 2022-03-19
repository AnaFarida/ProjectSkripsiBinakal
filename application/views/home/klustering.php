<section class="department_section layout_padding">
    <div class="department_container">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2>
                    Klustering DBD
                </h2>
                <p>
                    Masukkan Jumlah Kelompok Daerah Rawan DBD
                </p>
            </div>
            <br>
            <form action="<?= base_url('Hasil') ?>" method="post">
                <div class="row">
                    <div class="input-group mb-3">
                        <input class="form-control" type="number" id="cluster" name="cluster"
                            placeholder="Masukan jumlah klaster data 'Tidak Boleh Lebih dari 3'"
                            onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                            min="1" max="3" required>
                        <button class="btn btn-success" type="submit" id="button-addon2" data-mdb-ripple-color="dark">
                            Cluster
                        </button>
                    </div>
                </div>
            </form>
            <div class="btn-box">
                <a href="#data">
                    lihat Data
                </a>
            </div>
        </div>
    </div>
</section>


<section id="data" class="department_section layout_padding">
    <div class="department_container">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2>
                    Data DDB Puskesmas Binakal
                </h2>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th> No </th>
                            <th> Tahun</th>
                            <th> Desa </th>
                            <th> Jumlah Penderita </th>
                            <th> Jumlah Ditemukan Jentik Rumah </th>
                            <th> Jumlah Ditemukan Jentik Rumah </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                             foreach ($datadbd as $datadb) : ?>
                        <tr class="text-center">
                            <td> <?= $no++ ?> </td>
                            <td> <?= $datadb->tahun ?> </td>
                            <td> <?= $datadb->nama_desa ?> </td>
                            <td> <?= $datadb->jml_penderita ?> </td>
                            <td> <?= $datadb->jentik_rumah ?> </td>
                            <td> <?= $datadb->jentik_sekolah ?> </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</section>