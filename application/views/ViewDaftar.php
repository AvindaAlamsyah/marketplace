<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
<!--===============================================================================================-->
<style>
input::-webkit-input-placeholder { color: #868686;}
input:-moz-placeholder { color: #868686;}
input::-moz-placeholder { color: #868686;}
input:-ms-input-placeholder { color: #868686;}
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="<?php echo base_url('Daftar/daftar'); ?>">
					<span class="login100-form-title">
						Daftar
					</span>

					<?php echo $this->session->flashdata('pesan'); ?>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Mohon isi nama depan anda">
						<input class="input100" type="text" name="namaDepan" placeholder="Nama Depan">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Mohon isi nama belakang anda">
						<input class="input100" type="text" name="namaBelakang" placeholder="Nama Belakang">
						<span class="focus-input100"></span>
                    </div>
                    
					<div id="errEmail"></div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Mohon isi email aktif anda">
                        <input class="input100" type="email" name="email" placeholder="Email Aktif">
                        <span class="focus-input100"></span>
                    </div>

					<div id="errNomorTelp"></div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Mohon isi nomor telepon aktif anda">
                        <input class="input100" type="tel" name="nomorTelp" placeholder="Nomor Telepon Aktif">
                        <span class="focus-input100"></span>
                    </div>

					<div id="errNomorWA"></div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Mohon isi nomor whatsapp anda">
                        <input class="input100" type="tel" name="nomorWA" placeholder="Nomor WhatsApp">
                        <span class="focus-input100"></span>
                    </div>
					
					<div id="errUsername"></div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Mohon isi username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Mohon isi password">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>
					
					<div class="text-right p-t-13 p-b-23">
						<span class="txt1 p-b-9">
							Sudah mendaftar?
						</span>

						<a href="<?php echo base_url('Masuk'); ?>" class="txt3">
							Masuk
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="daftar" type="submit">
							Daftar
						</button>
					</div>
					<br>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/js/main.js"></script>
<!-- Jquery 
	<script type="text/javascript">
		var error = 0;

		//Validasi data penting
		$('#username,#email,#nomorWA,#nomorTelp').on('input',function(){
			var username = $('#username').val();
			var email = $('#email').val();
			var nomorTelepon = $('#nomorTelp').val();
			var nomorWA = $('#nomorWA').val();

			$.ajax({
				type : "POST",
				url : "<?php echo base_url('Daftar/cek'); ?>",
				dataType : "JSON",
				data : {username: username, email: email, nomorTelepon: nomorTelepon, nomorWA: nomorWA},
				async : false,
				success : function(pesan){
					switch (pesan.alert) {
						case 1:
							$('#errUsername').html('<div class="alert alert-warning">Username sudah digunakan</div>');
							$('#errNomorWA').html("");
							$('#errNomorTelp').html("");
							$('#errEmail').html("");
							error = 0;
							break;
						case 2:
							$('#errEmail').html('<div class="alert alert-warning">Email sudah digunakan</div>');
							$('#errNomorWA').html("");
							$('#errUsername').html("");
							$('#errNomorTelp').html("");
							error = 0;
							break;
						case 3:
							$('#errNomorTelp').html('<div class="alert alert-warning">Nomor telepon sudah digunakan</div>');
							$('#errNomorWA').html("");
							$('#errUsername').html("");
							$('#errEmail').html("");
							error = 0;
							break;
						case 4:
							$('#errNomorWA').html('<div class="alert alert-warning">Nomor Whatsapp sudah digunakan</div>');
							$('#errNomorTelp').html("");
							$('#errUsername').html("");
							$('#errEmail').html("");
							error = 0;
							break;
						case 5:
							$('#errNomorWA').html("");
							$('#errUsername').html("");
							$('#errNomorTelp').html("");
							$('#errEmail').html("");
							error = 1;
							if (condition) {
								
							} else {
								
							}
							break;
						default:
							break;
					}
				}
			});
		});

		$('#test').on('click',function(){
			swal('Test alert','berhasil','success');
		});
	</script>
-->
</body>
</html>