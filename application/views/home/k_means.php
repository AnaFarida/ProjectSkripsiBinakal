<div class="welcome-area" id="welcome">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>K-Means Clustering</h1>
                    <p style="margin-bottom: 10px; font-weight: 400; font-size: 20px">Masukkan jumlah kategori Daerah rawan DBD</p>
                </div>
                <div class="col-lg-12">
                    <form action="/Hasil" method="post">
                        <div class="row">
                            <div class="col-sm-10">
                                <input class="form-control" type="number" id="cluster" name="cluster" placeholder="Masukkan jumlah klaster ..." onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" min="1" max="4" required>
                                <small class="text-danger" style="font-weight: 400;">Tidak boleh lebih dari 3 Cluster</small>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-warning ml-4" type="submit" name="submit" id="submit">
                                    <i class="ni ni-send"></i> Cluster
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><br><br><br>
            <div class="text-center">
                <a href="#dataset" class="main-button-slider">Lihat Dataset</a>
            </div>
        </div>
    </div>