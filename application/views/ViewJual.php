<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jual Produk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				
			</div>
			<div class="wrap_header">
				<!-- Logo -->
				<a href="<?php echo base_url('Beranda'); ?>" class="logo">
					<img src="<?php echo base_url(); ?>assets/images/icons/logo.png" alt="IMG-LOGO">
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
						<img src="<?php echo base_url(); ?>assets/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

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
			<a href="<?php echo base_url('Beranda'); ?>" class="logo-mobile">
				<img src="<?php echo base_url(); ?>assets/images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<div class="header-wrapicon2">
						<img src="<?php echo base_url(); ?>assets/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

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

	<!-- Formulir Jual -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div align="center" class="p-l-15 p-r-15">
			<h4 class="m-text20 p-b-24" id="test">
				Formulir jual produk
			</h4>
			<div class="container bo4">
				<div class="p-t-25 p-b-25 p-l-100 p-r-100">
					<form action="<?php echo base_url('Pasar/simpanJual'); ?>" onkeypress="return event.keyCode != 13;" id="postJual">
						<div class="bo4 size15 m-b-20 form-group form-group-lg has-feedback">
							<input class="sizefull s-text7 p-l-22 p-r-22 form-control textbox" type="text" name="namaBarang" id="namaBarang" placeholder="Nama Produk">
							<i class="form-control-feedback"></i>
							<span class="text-warning"></span>
						</div>

						<div class="bo4 size15 m-b-20 rs2-select2 rs3-select2 rs4-select2 m-t-8 form-group form-group-lg has-feedback">
							<select class="selection-2 form-control textbox" name="daerah" id="daerah">
								<option value ="0">Pilih Daerah</option>
								<option value ="1">Magetan</option>
								<option value ="2">Madiun</option>
								<option value ="3">Ponorogo</option>
							</select>
							<i class="form-control-feedback"></i>
							<span class="text-warning"></span>
						</div>

						<div class="form-group form-group-lg has-feedback">
							<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20 form-control textbox" name="deskripsi" id="deskripsi" placeholder="Deskripsi Produk"></textarea>
							<i class="form-control-feedback"></i>
							<span class="text-warning"></span>
						</div>

						<div class="filter-price p-t-22 p-b-50 bo4 m-b-20">
							<div class="m-text15 p-b-17">
								Harga
							</div>

							<div class="wra-filter-bar p-l-20 p-r-20">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="s-text3 p-t-10 p-b-10 row p-l-40">
									Harga/Produk : Rp. <div class="bo4"><input id="value-lower" name="value-lower"></div>s/d Rp.<div class="bo4"><input id="value-upper" name="value-upper"></div>
								</div>
							</div>
						</div>

						<div class="filter-price p-t-22 p-b-50 bo4 m-b-20">
							<div class="m-text15 p-b-17">
								Berat
							</div>

							<div class="wra-filter-bar p-l-20 p-r-20">
								<div id="filter-bar2"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="s-text3 p-t-10 p-b-10 row p-l-40">
									Berat/Produk : <div class="bo4"><input id="value-lower2" name="value-lower2" class="t-right"></div>Kg s/d <div class="bo4"><input id="value-upper2" name="value-upper2" class="t-right"></div>Kg
								</div>
							</div>
						</div>

						<div class="bo4 size15 m-b-20 form-group form-group-lg has-feedback">
							<input class="sizefull s-text7 p-l-22 p-r-22 form-control textbox" type="text" name="persediaan" id="persediaan" placeholder="Persediaan Produk (Ekor)">
							<i class="form-control-feedback"></i>
							<span class="text-warning"></span><br>
						</div>
						<div class="bo4 t-left m-b-20">
							<label class="p-l-22 p-t-15 s-text7 p-b-10">Unggah gambar produk(max 3MB) :</label>
							<input type="file" name="file" id="file">
						</div>
						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" id="posting">
								Posting
							</button>
						</div>
					</form>
				</div>
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

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$('form').submit(false);

		$(document).ready(function() {
			$('.text-warning').hide();
			$('#test').on('click',function() {
				swal("Selamat","anda berhasil","success");
			});

			$('input, textarea').each(function(){
				$(this).blur(function(){
					if (! $(this).val()){
						return get_error_text(this);
					} else {
						$(this).removeClass('no-valid'); 
                    	$(this).parent().find('.text-warning').hide();
                    	$(this).closest('div').removeClass('has-warning');
	                    $(this).closest('div').addClass('has-success');
    	                $(this).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-warning-sign');
        	            $(this).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-ok');
					}
				});
			});

			$('#posting').click(function(){
				var valid = true;
				$('#postJual').find('.textbox').each(function(){
					if (! $(this).val()) {
						get_error_text(this);
						valid = false;
						$('html,body').animate({scrollTop: 0},"slow");
					}
					if ($('#daerah').val() == "0") {
						$('#daerah').parent().find('.text-warning').text("");
                		$('#daerah').parent().find('.text-warning').text("Mohon pilih daerah anda");
	               		return apply_feedback_error('#daerah');
						valid = false;
						$('html,body').animate({scrollTop: 0},"slow");
					} else{
						valid = true;
						$('#daerah').parent().find('.text-warning').hide();
					}
				});
				
				if(valid == true){
					swal({
						title: "Konfirmasi Posting Data",
						text: "Apakah anda yakin data sudah benar?",
						icon: "info",
						buttons:{
							cancel: true,
							confirm:{
								text: "Lanjutkan",
								closeModal: false,
							},
						},
					}).then((value) => {
						if (value) {
						/*
							var namaBarang = $('#namaBarang').val();
							var deskripsi = $('#deskripsi').val();
							var daerah = $('#daerah').val();
							var hargaMin = $('#value-lower').val();
							var hargaMax = $('#value-upper').val();
							var beratMin = $('#value-lower2').val();
							var beratMax = $('#value-upper2').val();
							var persediaan = $('#persediaan').val();
							*/
							var data = new FormData('#postJual');
							data.append('file', $(file)[0].files[0]);
							data.append('namaBarang', $('#namaBarang').val());
							data.append('deskripsiBarang', $('#deskripsi').val());
							data.append('hargaMin', $('#value-lower').val());
							data.append('hargaMax', $('#value-upper').val());
							data.append('beratMin', $('#value-lower2').val());
							data.append('beratMax', $('#value-upper2').val());
							data.append('daerah', $('#daerah').val());
							data.append('persediaan', $('#persediaan').val());

							$.ajax({
								url: "<?php echo base_url('Pasar/simpanJual'); ?>",
								type: "POST",
								cache: false,
								contentType: false,
								processData: false,
								data: data,
								//data: {namaBarang: namaBarang, deskripsiBarang: deskripsi, daerah: daerah, hargaMin: hargaMin, hargaMax: hargaMax, beratMin: beratMin, beratMax: beratMax, persediaan: persediaan},
								//dataType: "JSON",
								success: function(){
									setTimeout(() => {
										swal({
											title: "Selamat",
											text: "Data berhasil diposting di Pasar Online",
											icon: "success",
										}).then((value) =>{
											if (value) {
												window.location = "<?php echo base_url('Pasar'); ?>";
											}
										});
									}, 2000);
								}
							});
						}
					});
				}
			});
		
			function apply_feedback_error(textbox){
				$(textbox).addClass('no-valid');
        		$(textbox).parent().find('.text-warning').show();
        		$(textbox).closest('div').removeClass('has-success');
        		$(textbox).closest('div').addClass('has-warning');
		        $(textbox).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-ok');
		        $(textbox).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-warning-sign');
			}

			function get_error_text(textbox){
				var nama = "Nama";
				$(textbox).parent().find('.text-warning').text("");
        		$(textbox).parent().find('.text-warning').text("Harap isi formulir");
        		return apply_feedback_error(textbox);
			}
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/animsition/js/animsition.min.js"></script>

<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
			start: [ 1000000, 10000000 ],
			step : 1000,
			connect: true,
			margin: 50000,
	        range: {
	            'min': 10000,
	            'max': 15000000
			}
			
		});
		
		var valueLower = document.getElementById('value-lower');
		var valueUpper = document.getElementById('value-upper');
		
		filterBar.noUiSlider.on('update', function (values, handle) {
			var value = values[handle];

			if (handle) {
				valueUpper.value = Math.round(value);
			} else {
				valueLower.value = Math.round(value);
			}
		});

		valueLower.addEventListener('change', function () {
			filterBar.noUiSlider.set([this.value, null]);
		});
		
		valueUpper.addEventListener('change', function () {
			filterBar.noUiSlider.set([null, this.value]);
		});

		/*===========================================================*/
	    var filterBar2 = document.getElementById('filter-bar2');

	    noUiSlider.create(filterBar2, {
			start: [ 5, 100 ],
			connect: true,
			margin: 5,
	        range: {
	            'min': 1,
	            'max': 250
			}
			
		});
		
		var valueLower2 = document.getElementById('value-lower2');
		var valueUpper2 = document.getElementById('value-upper2');
		
		filterBar2.noUiSlider.on('update', function (values, handle) {
			var value = values[handle];

			if (handle) {
				valueUpper2.value = Math.round(value);
			} else {
				valueLower2.value = Math.round(value);
			}
		});

		valueLower2.addEventListener('change', function () {
			filterBar2.noUiSlider.set([this.value, null]);
		});

		
		valueUpper2.addEventListener('change', function () {
			filterBar2.noUiSlider.set([null, this.value]);
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>
</html>
