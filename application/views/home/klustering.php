<section class="department_section layout_padding">
    <div class="department_container">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2>
                    Klustering DBD
                </h2>
                <p>
                    Klik Cluster untuk mengetahui hasil klustering penyebaran DBD di Puskesmas Binakal
                </p>
            </div>
            <br>
            <form action="<?= base_url('Hasil') ?>" method="post">
                <div class="row">
                    <div class="input-group mb-3">
                        <input class="form-control" type="hidden" value="3" type="number" id="cluster" name="cluster">
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
                            <th> Desa </th>
                            <th> Jumlah Penderita </th>
                            <th> Jumlah Meninggal </th>
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
                        </tr>
                        <?php endforeach ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</section>