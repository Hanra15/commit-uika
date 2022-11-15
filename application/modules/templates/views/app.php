<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
		<?= $title;?>
	</title>
  <meta content="Community of Information Technology UIKA Bogor" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/img/logo2.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="kontak-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:ukmcommituika@gmail.com">ukmcommituika@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><a target="_blank" href="https://wa.me/+6281283215772">+62 8128 3215 772</a></span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a target="_blank" href="<?= site_url('Home/login')?>">Login</a>
				
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo d-flex w-100">
        <!-- <h1><a href="index.html">COMMIT UIKA Bogor</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
				<h1><a href="<?= base_url() ?>"><img src="<?= base_url()?>assets/img/Logo.png" alt="" class="img-fluid">COMMIT UIKA Bogor</a></h1>
        <!-- <h1 class="judul">COMMIT UIKA Bogor</h1> -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url() ?>">Beranda</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url("#profil") ?>">Profil</a></li>
					<li class="dropdown"><a href="<?= base_url("#struktur") ?>"><span>Struktur</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= site_url('Home/struktural') ?>">Struktur Organisasi</a></li>
              <li class="dropdown"><a href="#"><span>Divisi</span><i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?= site_url('Home/div_kerohanian') ?>">Kerohanian</a></li>
                  <li><a href="<?= site_url('Home/div_ordat') ?>">Organisasi & Data</a></li>
                  <li><a href="<?= site_url('Home/div_pdpl') ?>">Pendidikan & Pelatihan</a></li>
                  <li><a href="<?= site_url('Home/div_jaringan') ?>">Jaringan & Kelembagaan</a></li>
                  
                </ul>
              </li>
              <li><a href="<?= site_url('Home/visimisi') ?>">Visi & Misi</a></li>
              <li><a href="<?= site_url('Home/proker') ?>">Program Kerja</a></li>
              
            </ul>
          </li>
					<li><a class="nav-link scrollto " href="<?= base_url("#galeri") ?>">Galeri</a></li>
					<li><a class="nav-link scrollto" href="<?= base_url("#kontak") ?>">Kontak</a></li>
          <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#team"></a></li> -->
          <!-- <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="main-content">

		<div class="page-content" style="background-color: #f5f3f4;">

				<!-- Page Content-->
				<?php $this->load->view($page_content) ?>
				
		</div>
		<!-- End Page-content -->

		
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-kontak">
            <h3>UKM COMMIT UIKA Bogor</h3>
            <p>
              Sekretariat UKM Lt.2 <br>
              Universitas IBN Khaldun Bogor<br>
              Jl. Sholeh Iskandar, RT.01/RW.10, Kedungbadak, Kec. Tanah Sereal, Kota Bogor, <br> 
							Jawa Barat 16162 <br><br>
              <strong>Phone:</strong> +62 8128 3215 772<br>
              <strong>Email:</strong> ukmcommituika@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Konten</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("#profil") ?>">Profil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("#struktur") ?>">Struktur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("#galeri") ?>">Galeri</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("#kontak	") ?>">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Divisi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url('Home/div_kerohanian') ?>">Kerohanian</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url('Home/div_ordat')?>">Organisasi & Data</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url('Home/div_pdpl') ?>">Pendidikan & Pelatihan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url('Home/div_jaringan') ?>">Jaringan & Kelembagaan</a></li>
            </ul>
          </div>
		  <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
        <a target="_blank" href="https://web.facebook.com/commit.uika" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a target="_blank" href="https://www.instagram.com/commituika/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a target="_blank" href="mailto:ukmcommituika@gmail.com" class="gmail"><i class="bx bx-envelope"></i></a>
        <a target="_blank" href="https://www.youtube.com/" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a href="<?= base_url() ?>" class="site"><i class="bx bx-globe"></i></a>
      </div>
        </div>
      </div>
    </div>

   
  </footer>
	<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>
