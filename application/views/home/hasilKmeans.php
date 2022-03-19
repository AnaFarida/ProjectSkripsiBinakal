<section class="department_section layout_padding">
    <div class="department_container">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2>
                    Hasil Pengelompokan DBD Binakal
                </h2>
                <p>
                    Masukkan Jumlah Kelompok Daerah Rawan DBD
                </p>
            </div>
            <br>
            <legend
                style="font-weight: bold; border-radius: 5px; width: 200px; padding: 5px; background-color: #178066; color: #178066;">
                <p class="text-white" style="text-align: center; margin: 0; font-weight: bold;">Parameter</p>
            </legend>
            <table class="mt-4 mb-4">
                <tbody>
                    <tr>
                        <td>Jumlah Cluster</td>
                        <td class="pr-2 pl-2">:</td>
                        <td><?= $jumlah_centroid; ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Iterasi</td>
                        <td class="pr-2 pl-2">:</td>
                        <td><?= $jumlah_iterasi; ?></td>
                    </tr>
                </tbody>
            </table>
            <legend
                style="font-weight: bold; border-radius: 5px; width: 200px; padding: 5px; background-color: #178066; color: #178066;">
                <p class="text-white" style="text-align: center; margin: 0; font-weight: bold;">Centroid Akhir</p>
            </legend>
            <?php for ($i = 0; $i < $jumlah_centroid; $i++) {
            foreach ($centroid as $key => $value) {
                $var = array_sum($value);
                if ($short_cluster[$i] == $var) { ?>
            <div class="mb-4">
                <p style="margin-bottom:10px" class="form-label">Centroid <?= ($i + 1) ?></p>
                <input type="text" class="form-control form-control-sm" value="<?= implode(", ", $value) ?>"
                    readonly><?= $jumlah_per_centroid[$key] ?>

            </div>
            <?php }
            }
        } ?>
            <div class="card-body p-0">
                <legend
                    style="font-weight: bold; border-radius: 5px; width: 200px; padding: 5px; background-color: #178066; color: #178066;">
                    <p class="text-white" style="text-align: center; margin: 0; font-weight: bold;">Hasil</p>
                </legend>
                <table class="table table-striped">
                    <thead
                        style="font-weight: bold; border-radius: 5px; width: 200px; padding: 5px; background-color:  #62d2a2; color:  #62d2a2;"
                        class="text-white">
                        <tr>
                            <th style="width: 10px">Cluster</th>
                            <th>Daerah Hasil Cluster</th>
                        </tr>
                    </thead>
                    <?php for ($i = 0; $i < $jumlah_centroid; $i++) { ?>
                    <tbody>
                        <tr>
                            <td style="text-align: center;">
                                <b><?php echo $i + 1; ?></b>
                            </td>
                            <td>
                                <b><?php
                                for ($j = 0; $j < count($multi_cluster[$i]); $j++) {
                                    $k = $multi_cluster[$i][$j];
                                    echo implode($kecamatan[$k]);
                                    echo " | ";
                                } ?></b>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</section>