<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Sistem Pemetaan Demam Berdarah Dengue Puskemas Binakal</h1>
        <h2>Sistem ini dibuat untuk memberikan kemudahan dalam pemetaan Demam Berdarah Dengue Puskemas Binakal</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Login</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="assets/img/hero-img.svg" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row justify-content-between">
        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
          <img src="assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0">
          <h3 data-aos="fade-up">Tentang Puskesmas Binakal</h3>
          <p data-aos="fade-up" data-aos-delay="100">
            Puskesmas Binakal merupakan Unit Pelaksana Teknis Dinas Kesehatan Kabupaten Bondowoso yang mempunyai wilayah kerja 1 (satu) Kecamatan, yaitu Kecamatan Binakal.
          </p>
          <p data-aos="fade-up" data-aos-delay="100">
            Puskesmas Binakal melaksanakan pembangunan di bidang kesehatan secara mandiri dan mempunyai wewenang mengelola sumber daya, merencanakan dan mendesain bentuk pembangunan kesehatan di wilayah sesuai dengan situasi, kondisi, kultur budaya dan potensi setempat. Untuk menjalankan fungsinya dalam upaya meningkatkan jangkauan pelayanan kesehatan, Puskesmas didukung oleh unit-unit pelayanan fungsional yang meliputi Puskesmas Pembantu, Puskesmas Keliling, dan Bidan – Perawat di Desa.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title" alignitems="center">
        <h2>Visi Puskemas Binakal</h2>
        <p>Mewujudkan masyarakat sehat dan memberikan pelayanan kesehatan yang berkualitas</p>
        <h2>Misi Puskemas Binakal</h2>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-first-aid"></i></div>
            <h4 class="title"><a href="">Misi</a></h4>
            <p class="description">Menyelenggarakan upaya pemeliharaan kesehatan masyarakat sesuai prosedur yang terstandarisasi</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-check"></i></div>
            <h4 class="title"><a href="">Misi</a></h4>
            <p class="description">Meningkatkan kualitas SDM secara berkelanjutan sesuai kompetensi yang dibutuhkan</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i>
              <h4 class="title"><a href="">Misi</a></h4>
              <p class="description">Mengembangkan sarana dan mutu pelayanan sesuai kebutuhan masyarakat</p>
            </div>
          </div>

          <!-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
            </div>
          </div> -->

        </div>

      </div>
  </section><!-- End Services Section -->



  <!-- ======= Peta DBD ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
      <div class="col-lg-12">
                    <h1>K-Means Clustering DBD Binakal</h1>
                    <p style="margin-bottom: 10px; font-weight: 400; font-size: 20px">Masukkan jumlah kategori Daerah rawan DBD</p>
                </div>
      </div>

      <div class="row">

        <div class="col-sm-10">
          <input class="form-control" type="number" id="cluster" name="cluster" placeholder="Masukan jumlah klaster data" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" min="1" max="3" required>
          <small class="text-danger" style="font-weight: 400;">Tidak boleh lebih dari 3 kluster</small>
        </div>
        <div class="col-sm-2">
          <button class="btn btn-success ml-4" type="submit" name="submit" id="submit">
            <i class="ni ni-send"></i> Cluster
          </button>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Kontak Kami</h2>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Lokasi:</h4>
              <p>Jl Sumber waru, Malar, Binakal, Kabupaten Bondowoso, Jawa Timur 68251</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <!-- <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div> -->

            <iframe src="https://goo.gl/maps/MEHZckRYzobY5qda9" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <label for="name">Pesan</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesan Anda sudah terkirim. Terimakasih</div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Us Section -->

</main><!-- End #main -->