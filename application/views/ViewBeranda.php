<!DOCTYPE html>
<html lang="en">
<head>
	<title>Beranda</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<!--
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Free shipping for standard order over $100
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>USD</option>
							<option>EUR</option>
						</select>
					</div>
				</div>
			-->
			</div>
			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img src="assets/images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="<?php echo base_url('Beranda'); ?>">Beranda</a>
							</li>

							<li>
								<a href="<?php echo base_url('Pasar'); ?>">Pasar Online</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<div class="header-wrapicon2">
						<img src="assets/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Pengaturan Profil
										</a>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Keluar
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
					<?php
						if ($this->session->userdata('id') !== NULL) {
							echo "Halo, ".$this->session->userdata('nama');
						} else {
							echo "<a href=".base_url("Masuk").">Masuk</a> / <a href=".base_url("Daftar").">Daftar</a>";
						}
					?>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="assets/images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<div class="header-wrapicon2">
						<img src="assets/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Pengaturan Profil
										</a>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Keluar
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
					<?php
						if ($this->session->userdata('id') !== NULL) {
							echo "Halo, ".$this->session->userdata('nama');
						} else {
							echo "<a href=".base_url("Masuk").">Masuk</a> / <a href=".base_url("Daftar").">Daftar</a>";
						}
					?>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-menu-mobile">
						<a href="<?php echo base_url('Beranda'); ?>">Beranda</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo base_url('Pasar'); ?>">Pasar Online</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(assets/images/master-slide-02.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						
						<h2 class="caption1-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInDown">
							Pasar Online
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInUp">
							deskripsi tentang apa itu pasar online agar pengguna dapat mengetahui fungsinya
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Lebih Lanjut
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item1-slick1" style="background-image: url(assets/images/master-slide-02.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						
						<h2 class="caption1-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInDown">
							Nama Situs Kami
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInUp">
							deskripsi tentang kami dan tujuan dari pembuatan marketplace ini
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Kenali Kami
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Banner2 -->
	<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<h1 class="m-text30 t-center">
				Komitmen Kami
			</h1><br>

			<span class="s-text11 t-center">
				deskripsi singkatnya komitment kita
			</span>
		</div>
	</section>

	<!-- Iklan -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div align="center" class="p-l-15 p-r-15">

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo1 respon2">
				<h4 class="m-text12 t-center">
					Tempat iklan google
				</h4>

				<span class="s-text11 t-center">
					
				</span>
			</div>

		</div>
	</section>

	<!-- Banner2 -->
	<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<h1 class="m-text30 t-center">
				Mengapa harus online ?
			</h1><br>
			<div class="row">
				<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon2">
					<h4 class="m-text12 t-center">
						Memutus Rantai Distribusi
					</h4>

					<span class="s-text11 t-center">
						deskripsi singkatnya dampak terhadap peternak
					</span>
				</div>

				<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
					<h4 class="m-text12 t-center">
						Saling Menguntungkan
					</h4>

					<span class="s-text11 t-center">
						deskripsi singkat untung bagi kedua pihak
					</span>
				</div>

				<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon2">
					<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" onclick="location.href='<?php echo base_url('Pasar'); ?>'" >
						Masuk Pasar Online
					</button>
				</div>
				
			</div>
		</div>
	</section>

	<!-- Iklan -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div align="center" class="p-l-15 p-r-15">

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo1 respon2">
				<h4 class="m-text12 t-center">
					Tempat iklan google
				</h4>

				<span class="s-text11 t-center">
					
				</span>
			</div>

		</div>
	</section>


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					ROBOTINDO CORP.
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Alamat lengkap.
					</p>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Bantuan
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Kebijakan Privasi
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Syarat & Ketentuan
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Info
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Beranda
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Pasar Online
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Tentang Kami
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Hubungi Kami
				</h4>

				<div class="flex-m">
					<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-whatsapp"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
				</div>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 Robotindo. All rights reserved.
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="assets/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="assets/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="assets/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="assets/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="assets/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
		$('#beranda').on('click',function(){
			swal("test","berhasil","error");
		});

	</script>

<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>