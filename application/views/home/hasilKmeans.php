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
                    <div class="col-xl-12 col-lg-9 col-md-8">
                        <legend
                            style="font-weight: bold; border-radius: 5px; width: 200px; padding: 5px; background-color: #5AAC4E; color: #5AAC4E;">
                            <p class="text-white" style="text-align: center; margin: 0; font-weight: bold;">Parameter
                            </p>
                        </legend>
                        <font size="2">
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
                        </font>
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
                            <font size="2">
                                <table class="table table-striped">
                                    <thead
                                        style="font-weight: bold; border-radius: 5px; width: 200px; padding: 5px; background-color:  #5AAC4E; color:  #5AAC4E;"
                                        class="text-white">
                                        <tr>
                                            <th style="width: 10px">Cluster</th>
                                            <th>Daerah Hasil Cluster</th>
                                        </tr>
                                    </thead>
                                    <!-- <?php for ($i = 0; $i < $jumlah_centroid; $i++) {

                                        ?>
                                <tbody>
                                    <tr>
                                        <td style="t  ext-align: center;">
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
                                    </tr> -->
                                    <!-- </tbody> -->
                                    <!-- <?php } ?> -->

                                    <?php $no = 1;
                                $sort = [];
                                foreach ($index_arr as $key => $value) { ?>
                                    <tbody>
                                        <tr>
                                            <td style="text-align:center;">
                                                <b><?= $no; ?></b>
                                            </td>
                                            <td><?php
                                                $i = $value - 1;
                                                $sortDesa = [];
                                                for ($j = 0; $j < count($multi_cluster[$i]); $j++) {
                                                    $k = $multi_cluster[$i][$j];
                                                    $sortDesa[] = $desa[$k]['nama_desa'];
                                                    echo implode($desa[$k]);
                                                    echo ", ";
                                                }
                                                $sort[] = $sortDesa; 
                                                
                                                // var_dump($i)
                                                ?>
                                            </td>

                                        </tr>

                                    </tbody>
                                    <?php $no++;
                                } ?>

                                </table>
                            </font>
                            <legend
                                style="font-weight: bold; border-radius: 5px; width: 200px; padding: 5px; background-color: #5AAC4E; color: #5AAC4E;">
                                <p class="text-white" style="text-align: center; margin: 0; font-weight: bold;">
                                    Hasil Pemetaan
                                </p>

                            </legend>
                            <div id="map"></div>
                            <style>
                            #map {
                                width: 100%;
                                height: 60vh;
                            }

                            .info {
                                padding: 6px 8px;
                                font: 12px/14px Arial, Helvetica, sans-serif;
                                background: white;
                                background: rgba(255, 255, 255, 0.8);
                                box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
                                border-radius: 5px;
                            }

                            .info h4 {
                                margin: 0 0 5px;
                                color: #777;
                            }

                            .legend {
                                text-align: left;
                                line-height: 18px;
                                color: #555;
                            }

                            .legend i {
                                width: 16px;
                                height: 16px;
                                float: left;
                                margin-right: 8px;
                                opacity: 0.7;
                            }
                            </style>

                            <script>
                            // var mymap = L.map("mapid").setView([-7.913890374682106, 113.73443265411667], 13);
                            var mymap = L.tileLayer(
                                "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw", {
                                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery ?? <a href="https://www.mapbox.com/">Mapbox</a>',
                                    id: 'mapbox/streets-v11',
                                    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw',
                                });



                            var vector_desa = L.layerGroup();


                            <?php foreach ($data_desa as $keys => $data) {
                                    $warnadesa = [];
                                    foreach ($data_desa as $key => $value) {
                                        // $warna = ['#e20200', '#f9eb00', '#03cc3d'];
                                        // $warnaIndex = 0;
    
                                        if(in_array($value['nama_desa'], $sort[0])){
                                            $warnaIndex = '#e20200';
                                        }
                                        if(in_array($value['nama_desa'], $sort[1])){
                                            $warnaIndex = '#f9eb00';
                                        }
    
                                        if(in_array($value['nama_desa'], $sort[2])){
                                            $warnaIndex = '#03cc3d';
                                        }

                                        $warnadesa[$value['nama_desa']] = $warnaIndex;

                                }
                                ?>

                            console.log('<?= $data['nama_desa'] ?><?= $warnadesa[$data['nama_desa']] ?>')


                            // Tempat ngeload data geojson dari db, serta memberikan warna pada geojson dari variabel warna diatas
                            L.geoJSON(<?= $data['geojson'] ?>, {
                                style: {
                                    color: 'black',
                                    fillColor: '<?= $warnadesa[$data['nama_desa']] ?>',
                                    fillOpacity: 1.0,
                                    weight: 1,
                                    pointToLayer: function(feature, latlng) {
                                        console.log(latlng);
                                        return L.circleMarker(latlng, geojsonMarkerOptions);
                                    }
                                },
                            }).addTo(vector_desa);
                            <?php } ?>

                            var desa = L.layerGroup();

                            // Tempat memberikan pin pada maps 
                            var blueIcon = new L.Icon({
                                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
                                iconSize: [25, 41],
                                iconAnchor: [12, 41],
                                popupAnchor: [1, -34],
                                shadowSize: [41, 41]
                            });

                            // Tempat setting map default awal pertama kali diload
                            var map = L.map("map", {
                                center: [-7.90808752623913, 113.73545303305184],
                                zoom: 12,
                                layers: [mymap, vector_desa],
                            });

                            // Tempat mengatur dan memberikan tooltips (popup) ketika pin maps di klik
                            <?php foreach ($data_des as $data) { ?>
                            var marker = L.marker([<?= $data['latitude'] ?>, <?= $data['longtitude'] ?>], {
                                icon: blueIcon
                            }).bindPopup(
                                '<b class="text-sm"><?= $data['nama_desa'] ?></b><br><span>Jumlah Penderita : <?= $data['jml_penderita'] ?>, Jumlah Meninggal : <?= $data['jml_meninggal'] ?></span>'
                            ).addTo(map);
                            <?php } ?>


                            var baseMaps = {
                                "Map": mymap,
                            };
                            L.control.layers(baseMaps).addTo(map);

                            // Tempat memberikan legend (keterangan) pada maps yg berada di pojok kanan bawah itu 

                            var legend = L.control({
                                position: 'bottomright'
                            });

                            legend.onAdd = function(map) {
                                var div = L.DomUtil.create('div', 'info legend leaflet-control br {clear: both;}'),
                                    grades = ['Daerah Endemis', 'Daerah Potensial', 'Daerah Bebas', ],
                                    labels = [],
                                    from, to;

                                labels.push(
                                    '<i style="background:#e20200' + '"></i> Daerah Endemis (Cluster 1)',
                                    '<i style="background:#f9eb00' + '"></i> Daerah Potensial (Cluster 2)',
                                    '<i style="background:#03cc3d' + '"></i> Daerah Bebas (Cluster 3)',
                                );

                                div.innerHTML = labels.join('<br>');
                                return div;
                            };
                            legend.addTo(map);
                            </script>
                        </div>
                        <br><br>
                        <div id="accordion">
                            <div class="card card-primary">
                                <div class="card-header"
                                    style="font-weight: bold; background-color: #5AAC4E; color: #5AAC4E;">
                                    <h4 class="card-title w-100">
                                        <a class="text-white" data-toggle="collapse" href="#collapseOne">
                                            Penanggulagan & Pencegahan DBD
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        <font size="2">
                                            <table class="mt-4 mb-4">
                                                <tbody>
                                                    <?php $no = 1; foreach ($penanggulangan as $data) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td>.</td>
                                                        <td align="justify"><?= $data->penanggulangan ?></td>
                                                    </tr>

                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </font>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--? Services Area Start -->

</main>