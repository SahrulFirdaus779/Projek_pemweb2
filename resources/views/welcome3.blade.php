
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MWeitras</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Senin - Jum'at 08:00 - 10:00
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> No telpon +62-82121234468
      </div>
    </div>
  </div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ asset('assets/img/logo2.png') }}" alt="">
      <span class="ms-2 fs-6 fw-bold text-dark">Mediciyo Weitras</span>
    </a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                <li><a class="nav-link scrollto" href="#services">Form Pendaftaran</a></li>
                <li><a class="nav-link scrollto" href="#departments">Fasilitas</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
                <li class="dropdown">
                    <a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown">
                            <a href="{{ url('/RSakit') }}"><span>Rumah Sakit</span> <i class="bi bi-chevron-right"></i></a>
                            <ul></ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('/Puskes') }}"><span>Puskesmas</span> <i class="bi bi-chevron-right"></i></a>
                            <ul></ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('/Klinik') }}"><span>Klinik</span> <i class="bi bi-chevron-right"></i></a>
                            <ul></ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('/Labor') }}"><span>Laboratorium</span> <i class="bi bi-chevron-right"></i></a>
                            <ul></ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Selamat Datang <span> di Direktori Fasilitas Kesehatan Terpercaya</span></h2>
            <p>"Temukan fasilitas kesehatan terdekat dan terbaik di sekitar Anda. Kami menyediakan informasi lengkap mengenai rumah sakit, klinik, puskesmas, dan berbagai layanan kesehatan lainnya."</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Cari Fasilitas Kesehatan Terdekat</h2>
            <p>Masukkan nama atau lokasi fasilitas kesehatan yang Anda cari</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Filter Berdasarkan Jenis Fasilitas Kesehatan</h2>
            <p>Pilih jenis fasilitas kesehatan: Rumah Sakit, Klinik, Puskesmas, dan lainnya.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Anda Membutuhkan Fasilitas Kesehatan Terpercaya?</h3>
          <p>Kami mengundang Anda untuk mendaftarkan fasilitas kesehatan Anda dengan mengisi formulir berikut. Informasi yang Anda berikan akan digunakan untuk keperluan verifikasi dan pemrosesan izin operasional.</p>
          <a class="cta-btn scrollto" href="#services">Form Pendaftaran</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang kami</h2>
          <p>Selamat datang di website Fasilitas Kesehatan kami, tempat yang didedikasikan untuk memberikan layanan kesehatan terbaik kepada masyarakat. Website ini dirancang untuk memudahkan akses informasi dan layanan kesehatan bagi seluruh pengguna.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/faskes.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3> Direktori Fasilitas Kesehatan Terpercaya</h3>
            <p class="fst-italic">
              Menyediakan informasi lengkap tentang berbagai fasilitas kesehatan yang tersedia, termasuk rumah sakit, klinik, apotek, dan laboratorium. Pengguna dapat dengan mudah menemukan lokasi, jam operasional, dan jenis layanan yang ditawarkan.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Pendaftaran Online</li>
              <li><i class="bi bi-check-circle"></i> Layanan Telemedis</li>
              <li><i class="bi bi-check-circle"></i> Informasi Kesehatan.</li>
            </ul>
            <p>
              Misi Kami:

              Kami berkomitmen untuk menyediakan layanan kesehatan yang mudah diakses, terpercaya, dan berkualitas tinggi bagi semua orang. Dengan menggunakan teknologi terkini, kami berharap dapat meningkatkan kesejahteraan dan kualitas hidup masyarakat.
              
          
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <section id="appointment" class="appointment section-bg">
          <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Form Pendaftran Faskes </h2>
          <p>Daftarkan fasilitas kesehatan Anda dengan mengisi formulir berikut. Informasi yang Anda berikan akan digunakan untuk keperluan verifikasi dan pemrosesan izin operasional.</p>
        </div>

        <form action="{{ route('faskes.store') }}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama Pengelola" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Rating" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Website" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="name" placeholder="Nama Fasilitas Kesehatan" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="pelayanan" id="pelayanan" class="form-select">
                <option value="">Pilih Fasilitas</option>
                <option value="Department 1">Rumah Sakit</option>
                <option value="Department 2">Puskesmas</option>
                <option value="Department 3">Klinik</option>
                <option value="Department 3">Praktik Mandiri</option>
                <option value="Department 3">Laboratorium</option>
                <option value="Department 3">Faskes Lainnya</option>
                <option value="Department 3">Rumah Bersalin</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="textarea" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="textarea" class="form-control" name="kota" id="kota" placeholder="Kota/Kabupaten" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="textarea" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="textarea" class="form-control" name="Latitude" id="Latitude" placeholder="Latitude" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="textarea" class="form-control" name="Longitude" id="Longitude" placeholder="Longitude" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="textarea" class="form-control" name="Kategori" id="Kategori" placeholder="Kategori" required>
            </div>
          </div>
          <div class="text-center"><button type="submit">Kirim</button></div>
        </form>
      </div>
    </section><!-- End Services Section -->

    

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Fasilitas</h2>
          <p></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>Rumah Sakit</h4>
                  <p></p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>Laboratorium</h4>
                  <p></p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>Puskesmas</h4>
                  <p></p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                  <h4>Klinik</h4>
                  <p></p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Rumah Sakit</h3>
                <p class="fst-italic">Rumah sakit berperan penting dalam memberikan pelayanan kesehatan yang holistik dan berkualitas tinggi, serta memastikan kesejahteraan dan keselamatan pasien Fasilitas yang ada di rumah sakit mencakup</p>
                <img src="assets/img/rumahsakit.jpg" alt="" class="img-fluid">
                <p>- Unit Gawat Darurat (UGD)</p>
                <p>- Ruang Rawat Inap</p>
                <p>- Ruang Operasi</p>
                <p>- Ruang Operasi</p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Laboratorium</h3>
                <p class="fst-italic">Laboratorium medis  mematuhi standar kualitas dan keamanan yang ketat untuk memastikan bahwa setiap tes dilakukan dengan akurasi dan presisi tinggi Fasilitas dan layanan yang ada di laboratorium medis mencakup</p>
                <img src="assets/img/labor.jpg" alt="" class="img-fluid">
                <p>- Pengujian Hematologi</p>
                <p>- Pengujian Biokimia</p>
                <p>- Pengujian Mikrobiologi</p>
                <p>- Pengujian Patologi Klinis</p>
                <p>- Pengujian Imunologi</p>
                <p>- Pengujian Genetik</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Puskesmas</h3>
                <p class="fst-italic"> fasilitas pelayanan kesehatan dasar yang menyediakan berbagai layanan medis bagi masyarakat di tingkat kecamatan, Fasilitas dan layanan yang ada di puskesmas mencakup:</p>
                <img src="assets/img/puskesmas.jpg" alt="" class="img-fluid">
                <p>- Pelayanan Kesehatan Ibu dan Anak</p>
                <p>- Pelayanan Kesehatan Lingkungan</p>
                <p>- Pelayanan Gizi</p>
                <p>- Pelayanan Kesehatan Masyarakat</p>
                <p>- Pelayanan Penyakit Menular</p>
                <p>- Pelayanan Penyakit Tidak Menular</p>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>Klinik</h3>
                <p class="fst-italic">fasilitas pelayanan kesehatan yang menyediakan berbagai layanan medis dasar hingga spesialis secara rawat jalan, Fasilitas dan layanan yang ada di klinik mencakup:</p>
                <img src="assets/img/klinik.jpg" alt="" class="img-fluid" style="width: 100%; height: auto;">
                <p>- Konsultasi Medis Umum</p>
                <p>- Konsultasi Spesialis</p>
                <p>- Pemeriksaan Diagnostik</p>
                <p>- Imunisasi</p>
                <p>- Layanan Kesehatan Khusus</p>
                <p>- Penyuluhan dan Edukasi Kesehatan</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->
   

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/galeri 1.jpg"><img src="assets/img/gallery/galeri 1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/galeri 2.jpg"><img src="assets/img/gallery/galeri 2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/galeri 3.jpg"><img src="assets/img/gallery/galeri 3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/galeri 4.jpg"><img src="assets/img/gallery/galeri 4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/galeri 5.jpg"><img src="assets/img/gallery/galeri 5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/galeri 6.jpg"><img src="assets/img/gallery/galeri 6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/galeri 7.jpg"><img src="assets/img/gallery/galeri 7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/galeri 8.jpg"><img src="assets/img/gallery/galeri 8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->
       

         
        
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Kami dengan senang hati akan membantu Anda dengan segala pertanyaan dan kebutuhan kesehatan. Anda dapat menghubungi kami melalui informasi kontak berikut atau mengunjungi lokasi kami yang tertera pada peta di bawah ini</p>
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126907.08080652679!2d106.71967603230382!3d-6.283929460552224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1ec2422b0b3%3A0x39a0d0fe47404d02!2sSouth%20Jakarta%2C%20South%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1720327562517!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Mediciyo Weitras</h3>
              <p>
                Jakarta Selatan
                 <br>
                Indonesia<br><br>
                <strong>Phone:</strong> +62-82121234468<br>
                <strong>Email:</strong> faskes26@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Form Pendaftaran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#departemens">Fasilitas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
            </ul>
          </div>

         

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Masukan untuk kami</h4>
            <p>Caring for You Always</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Kirim">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
       
      <div class="credits">
      
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
