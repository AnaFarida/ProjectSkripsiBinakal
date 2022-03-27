<main>
    <!--? Slider Area Start-->
    <div class="slider-area slider-area2">
        <div class="slider-active dot-style">
            <!-- Slider Single -->
            <div class="single-slider  d-flex align-items-center slider-height2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-8 col-md-10 ">
                            <div class="hero-wrapper">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">Hasil Klustering DBD</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Puskesmas Binakal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->
    <section class="wantToWork-area">
        <div class="container">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-9 col-md-8">
                        <legend
                            style="font-weight: bold; border-radius: 5px; width: 200px; padding: 5px; background-color: #5AAC4E; color: #5AAC4E;">
                            <p class="text-white" style="text-align: center; margin: 0; font-weight: bold;">Parameter
                            </p>
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
                            style="font-weight: bold; border-radius: 5px; width: 200px; padding: 5px; background-color: #5AAC4E; color: #5AAC4E;">
                            <p class="text-white" style="text-align: center; margin: 0; font-weight: bold;">Centroid
                                Akhir</p>
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
                                style="font-weight: bold; border-radius: 5px; width: 200px; padding: 5px; background-color: #5AAC4E; color: #5AAC4E;">
                                <p class="text-white" style="text-align: center; margin: 0; font-weight: bold;">Hasil
                                </p>
                            </legend>
                            <table class="table table-striped">
                                <thead
                                    style="font-weight: bold; border-radius: 5px; width: 200px; padding: 5px; background-color:  #5AAC4E; color:  #5AAC4E;"
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
                                    echo implode($desa[$k]);
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
            </div>
        </div>
    </section>
    <!--? Services Area Start -->
    <div class="service-area">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>

    <!--? Testimonial Area Start -->
    <section class="testimonial-area testimonial-padding fix pb-bottom">
    </section>
    <!--? Testimonial Area End -->

    <!--? About Law Start-->

</main>