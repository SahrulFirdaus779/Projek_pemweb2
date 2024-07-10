<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rumah Sakit</title>
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

      <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ asset('assets/img/logo3.png') }}" alt=""></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="{{ url('/') }}">Home</a></li>
          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/RSakit') }}"><span>Rumah Sakit</span> <i class="bi bi-chevron-right"></i></a></li>
              <li><a href="{{ url('/Puskes') }}"><span>Puskesmas</span> <i class="bi bi-chevron-right"></i></a></li>
              <li><a href="{{ url('/Klinik') }}"><span>Klinik</span> <i class="bi bi-chevron-right"></i></a></li>
              <li><a href="{{ url('/Labor') }}"><span>Laboratorium</span> <i class="bi bi-chevron-right"></i></a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

   <!-- ======= Breadcrumbs Section ======= -->
   <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Laboratorium</h2>
  
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->
    
  <section class="inner-page">
    <div class="container">
        <h2 class="text-center mb-4">Pelayanan Laboratorium</h2>
        
        <div class="row">
            <div class="col-md-5">
                <img src="assets/img/labor.jpg" alt="Deskripsi Gambar" class="img-fluid rounded mb-4">
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Pelayanan Yang Tersedia</h3>
                        <ul class="list-unstyled">
                            <li><strong>Pengujian Hematologi:</strong> Meliputi analisis darah lengkap untuk memantau kesehatan umum dan mendeteksi penyakit.</li>
                            <li><strong>Pengujian Biokimia:</strong> Analisis kimia darah untuk mengevaluasi fungsi organ dan deteksi penyakit metabolik.</li>
                            <li><strong>Pengujian Mikrobiologi:</strong> Identifikasi dan kultur mikroorganisme untuk diagnosis infeksi.</li>
                            <li><strong>Pengujian Patologi Klinis:</strong> Pemeriksaan jaringan dan sel untuk mendiagnosis kondisi patologis seperti kanker.</li>
                            <li><strong>Pengujian Imunologi:</strong> Evaluasi respons imun tubuh untuk diagnosis penyakit autoimun dan infeksi.</li>
                            <li><strong>Pengujian Genetik:</strong> Analisis DNA untuk mendeteksi kelainan genetik atau risiko penyakit genetik tertentu.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Inner Page Section -->

  
  
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Medicio Weitras</h3>
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
