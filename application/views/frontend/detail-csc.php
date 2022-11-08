<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
	<ol>
	  <li><a href="<?= base_url() ?>">Beranda</a></li>
	  <li><a href="<?= base_url("#proker") ?>">Program Kerja</a></li>
	  <li>Commit Student Camp</li>
	</ol>
	<h2><?= $sub; ?></h2>
  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= galeri Details Section ======= -->
<section id="galeri-details" class="galeri-details">
  <div class="container">

	<div class="row gy-4">

	  <div class="col-lg-8">
		<div class="galeri-details-slider swiper">
		  <div class="swiper-wrapper align-items-center">

			<div class="swiper-slide">
			  <img src="<?= base_url() ?>assets/img/galeri/portfolio-details-1.jpg" alt="">
			</div>

			<div class="swiper-slide">
			  <img src="<?= base_url() ?>assets/img/galeri/portfolio-details-2.jpg" alt="">
			</div>

			<div class="swiper-slide">
			  <img src="<?= base_url() ?>assets/img/galeri/portfolio-details-3.jpg" alt="">
			</div>

		  </div>
		  <div class="swiper-pagination"></div>
		</div>
	  </div>

	  <div class="col-lg-4">
		<div class="galeri-info">
		  <h3>Commit Student Camp</h3>
		  <ul>
			<li><strong>Nama</strong>: Arini Aflahal Yaumi & Septi Renata</li>
			<li><strong>Jabatan</strong>: Bendum 1 & Bendum 2</li>
			<li><strong>Fakultas</strong>: FKIP</li>
			<!-- <li><strong>Test</strong>: Test</li> -->
		  </ul>
		</div>
		<div class="galeri-description">
		  <h2>Apa sif CSC itu?</h2>
		  <p>
			Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
		  </p>
		</div>
	  </div>

	</div>

  </div>
</section><!-- End galeri Details Section -->

</main><!-- End #main -->
