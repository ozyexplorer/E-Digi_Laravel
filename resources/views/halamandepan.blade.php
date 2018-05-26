<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<!-- START BAGIAN NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
	  <a class="navbar-brand" href="#">E-DIGI</a>
	  <button class="navbar-toggler right-padding" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Fitur</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Tim Kami</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Kontak Kami</a>
	      </li>
	    </ul>
	    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#masuk">MASUK</button>
	    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#daftar">DAFTAR</button>
	  </div>
	</nav>
	<!-- END BAGIAN NAVBAR -->
	<section class="header-home" id="home">
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-header-text lr-padding">
					<div class="judul_text">
						<h1>Jual Beli Voucher Indodax.com Disini</h1>
						<p>Website ini akan memudahkan anda dalam bertransaksi <span>Bitcoin</span> dengan cepat</p>
					</div>
				</div>
				<div class="col-sm-5 col-md-offset-2 col-md-3 col-header-img right-padding">
					<img src="{{ asset('storage/img/tes.png') }} " class="img-header-lg" width="500px" height="300px" alt="Responsive image">
					<img src="{{ asset('storage/img/btc.png') }}" class="img-header-sm" width="200px" height="200" alt="Responsive image">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 jual_beli">
					<button type="button" class="banner_btn btn-white btn-lg" data-toggle="modal" data-target="#buy">Beli Voucher</button>
					<button type="button" class="banner_btn btn-transparent btn-lg" data-toggle="modal" data-target="#sell">Jual Voucher</button>
				</div>
			</div>
			<div class="social">
				<a class="fa fa-facebook"></a>
				<a class="fa fa-twitter"></a>
				<a class="fa fa-google"></a>
				<a class="fa fa-youtube"></a>
				<a class="fa fa-instagram"></a>
			</div>
		</div>
	</section>

	<!-- MODAL PEMBELIAN VOUCHER -->
	<div id="buy" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Beli Voucher Disini</h4>
				</div>
				<div class="modal-body">
		        <form>
		          <div class="form-group">
		            <label for="recipient-name" class="col-form-label">Masukan Nama Lengkap Anda</label>
		            <input type="text" class="form-control" id="recipient-name" placeholder="nama sesuai akun indodax">
		            <label for="recipient-name" class="col-form-label">Masukan Email Anda</label>
		            <input type="text" class="form-control" id="recipient-name" placeholder="voucher@email.com">
		            <label for="recipient-name" class="col-form-label">Masukan Nomer HP Anda</label>
		            <input type="text" class="form-control" id="recipient-name" placeholder="nomer hp aktif">
		            <label for="recipient-name" class="col-form-label">Masukan Nominal Pembelian Voucher</label>
		            <input type="text" class="form-control" id="recipient-name" placeholder="Minimal Rp. 50.000">
		          </div>
		          <div class="form-group">
		          	<p>Catatan*<br>
		          		<ol>
		          			<li>Jika nama tidak sesuai dengan nama akun dan nama bank, maka transaksi tidak akan diproses</li>
		          			<li>Pembelian voucher dibawah Rp. 50.000 tidak akan diproses</li>
		          		</ol>
		          	</p>

		          </div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
		        <button type="button" class="btn btn-success">Beli Voucher</button>
		      </div>
			</div>
		</div>
	</div>

	<!-- MODAL PEMBELIAN VOUCHER -->

	<!-- MODAL PENJUALAN VOUCHER -->
	<div id="sell" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Jual Voucher Disini</h4>
				</div>
				<div class="modal-body">
		        <form>
		          <div class="form-group">
		            <label for="recipient-name" class="col-form-label">Masukan Nama Lengkap Anda</label>
		            <input type="text" class="form-control" id="recipient-name" placeholder="nama sesuai akun indodax">
		            <label for="recipient-name" class="col-form-label">Masukan Email Anda</label>
		            <input type="text" class="form-control" id="recipient-name" placeholder="voucher@email.com">
		            <label for="recipient-name" class="col-form-label">Masukan Nomer HP Anda</label>
		            <input type="text" class="form-control" id="recipient-name" placeholder="nomer hp aktif">
		            <label for="recipient-name" class="col-form-label">Masukan Nominal Voucher</label>
		            <input type="text" class="form-control" id="recipient-name" placeholder="Maksimal Rp. 10.000.000">
		            <label for="recipient-name" class="col-form-label">Masukan Voucher Anda</label>
		            <input type="text" class="form-control" id="recipient-name" placeholder="BTC-IDR-XXXXXXXX-XXXXXXXX-XXXXXXXX-XXXXXXXX-XXXXXXXX">
		          </div>
		          <div class="form-group">
		          	<p>Catatan*<br>
		          		<ol>
		          			<li>Jika nama tidak sesuai dengan nama akun dan nama bank, maka transaksi tidak akan diproses</li>
		          			<li>Penjualan voucher minimal Rp. 50.000, Maksimal Rp. 10.000.000</li>
		          			<li>Penjualan dibatalkan jika tidak memenuhi syarat diatas dan kode voucher salah atau tidak sesuai</li>
		          		</ol>
		          	</p>

		          </div>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
		        <button type="button" class="btn btn-success">Beli Voucher</button>
		      </div>
			</div>
		</div>
	</div>

	<!-- END MODAL PENJUALAN VOUCHER -->

	<!-- MODAL DAFTAR -->
	<div id="daftar" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">DAFTAR</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" method="POST" action="{{ route('register') }}">
							{{ csrf_field() }}

							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">



									<label for="recipient-name" class="col-form-label"><strong>Nama Lengkap</strong></label>

											<input type="text" class="form-control" id="recipient-name" name="name" value="{{ old('name') }}" required autofocus placeholder="nama sesuai akun indodax">

											@if ($errors->has('name'))
													<span class="help-block">
															<strong>{{ $errors->first('name') }}</strong>
													</span>
											@endif
							</div>

							<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
								<label for="recipient-name" class="col-form-label"><strong>Username</strong></label>
		            <input type="text" class="form-control" name="username" id="recipient-name" value="{{ old('username') }}" required placeholder="username">
												@if ($errors->has('username'))
													<span class="help-block">
															<strong>{{ $errors->first('username') }}</strong>
													</span>
											@endif
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<label for="recipient-name" class="col-form-label"><strong>Password</strong></label>
		            <input type="password" class="form-control" id="recipient-name" placeholder="password" name="password" required>
											@if ($errors->has('password'))
													<span class="help-block">
															<strong>{{ $errors->first('password') }}</strong>
													</span>
											@endif
							</div>

							<div class="form-group">
									<label for="password-confirm" class="col-form-label"><strong>Confirm Password</strong></label>
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
							</div>

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<label for="recipient-name" class="col-form-label"><strong>Masukan Email Anda</strong></label>
		            <input type="text" class="form-control" name="email" id="recipient-name" value="{{ old('email') }}" placeholder="voucher@email.com" required>

											@if ($errors->has('email'))
													<span class="help-block">
															<strong>{{ $errors->first('email') }}</strong>
													</span>
											@endif
							</div>

							<div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
								<label for="recipient-name" class="col-form-label"><strong>Masukan Nomer HP Anda</strong></label>
								<input type="text" class="form-control" id="recipient-name" name="no_hp" value="{{ old('no_hp') }}" placeholder="nomer hp aktif">

											@if ($errors->has('no_hp'))
													<span class="help-block">
															<strong>{{ $errors->first('no_hp') }}</strong>
													</span>
											@endif
							</div>


							<!-- <div class="form-group">
									<div class="col-md-6 col-md-offset-4">
											<button type="submit" class="btn btn-primary">
													Register
											</button>
									</div>
							</div> -->

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
		        <button type="submit" class="btn btn-success">Register</button>
		      </div>
					</form>
			</div>
		</div>
	</div>
	<!-- END MODAL DAFTAR -->


	<!-- MODAL LOGIN -->
	<!-- <div id="masuk" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">LOGIN</h4>
				</div>
				<div class="modal-body">
		        <form>
				  <div class="input-group">
				    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
				  </div><br>
				  <div class="input-group">
				    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
				  </div>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
		        <button type="button" class="btn btn-success">Masuk</button>
		      </div>
			</div>
		</div>
	</div> -->

	<!-- MODAL LOGIN -->

	<div id="masuk" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">LOGIN</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" method="POST" action="{{ route('login') }}">
							{{ csrf_field() }}

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
										<label for="email" class="col-form-label"><strong>E-mail Address</strong></label>
											<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

											@if ($errors->has('email'))
													<span class="help-block">
															<strong>{{ $errors->first('email') }}</strong>
													</span>
											@endif
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
										<label for="password" class="col-form-label"><strong>Password</strong></label>
											<input id="password" type="password" class="form-control" name="password" required>

											@if ($errors->has('password'))
													<span class="help-block">
															<strong>{{ $errors->first('password') }}</strong>
													</span>
											@endif
							</div>

							<div class="form-group">
									<!-- <div class="col-md-6 col-md-offset-4"> -->
											<div class="checkbox">
													<label>
															<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
													</label>
											</div>
											<a class="btn btn-link" href="{{ route('password.request') }}">
											Forgot Your Password?
											</a>
									<!-- </div> -->
							</div>

							<div class="form-group">
									<!-- <div class="col-md-8 col-md-offset-4"> -->

									<!-- </div> -->
							</div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
		        <button type="submit" class="btn btn-success">Masuk</button>
		      </div>
					</form>
			</div>
		</div>
	</div>


	<section id="about" class="section-padding about-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="section_title">
						<h3>Kami Berikan yang terbaik</h3>
					</div>
				</div>
			</div>

			<div id="fitur">
				<div class="row">
					<div class="col-sm-4 time">
						<img src="{{ asset('storage/img/time.png') }}" class="img-fluid" width="100px" height="100px" alt="Responsive image">
						<p class="fitur">Transaksi Lebih Cepat</p>
					</div>
					<div class="col-sm-4 Proses">
						<img src="{{ asset('storage/img/businessman.png') }}" class="img-fluid" width="100px" height="100px" alt="Responsive image">
						<p class="fitur">Proses Transaksi Lebih Mudah</p>
					</div>
					<div class="col-sm-4 pendaftaran">
						<img src="{{ asset('storage/img/meeting.png') }}" class="img-fluid" width="100px" height="100px" alt="Responsive image">
						<p class="fitur">Pendaftaran Gratis</p>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-sm-4 time">
						<img src="{{ asset('storage/img/bell.png') }}" class="img-fluid" width="100px" height="100px" alt="Responsive image">
						<p class="fitur">Tersedia Laporan Transaksi</p>
					</div>
					<div class="col-sm-4 Proses">
						<img src="{{ asset('storage/img/money-bag.png') }}" class="img-fluid" width="100px" height="100px" alt="Responsive image">
						<p class="fitur">Biaya Jual Voucher 1%</p>
					</div>
					<div class="col-sm-4 pendaftaran">
						<img src="{{ asset('storage/img/money.png') }}" class="img-fluid" width="100px" height="100px" alt="Responsive image">
						<p class="fitur">Beli Voucher Minimal Rp. 50.000</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="team" class="section-padding skill_area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<div class="section_title text-center">
						<h2>TENTANG<strong> KAMI</strong></h2>
					</div>
					<p class="about_team">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-sm-6">
					<div class="skill">
						<h2 style="text-align: center;">SKILL KAMI</h2>
						<span>FrontEnd Developer</span>
						<div class="progress">
		  					<div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
						</div>
						<span>Desainer UI/UX</span>
						<div class="progress">
		  					<div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> 70%</div>
						</div>
						<span>BackEnd Developer</span>
						<div class="progress">
		  					<div class="progress-bar bg-danger" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> 90%</div>
						</div>
					</div>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-sm-12">
					<hr>
				</div>
			</div>
		</div>
	</section>

	<section id="our_team">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>MEET OUR <strong>TEAM</strong></h2>
					<br><br>
				</div>
			</div>
			<div class="row justify-content-center	">
				<div class="col-sm-4 text-center">
					<img src="{{ asset('storage/img/fata.jpg') }}" class="img-fluid tim" alt="Responsive image">
					<br><br>
					<center><h5><b>Fata Hasan</b></h5></center>
					<i>BackEnd Developer</i>
					<br>
					<b>CTO DigiLabs</b>
					<br><br>
					<a href="#"><img src="{{ asset('storage/img/facebook.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
					<a href="#"><img src="{{ asset('storage/img/twitter.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
					<a href="#"><img src="{{ asset('storage/img/instagram.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
				</div>
				<div class="col-sm-4 text-center">
					<img src="{{ asset('storage/img/barrur.jpg') }}" class="img-fluid tim" alt="Responsive image">
					<br><br>
					<center><h5><b>Barrur Rhozi</b></h5></center>
					<i>FrontEnd Developer</i>
					<br>
					<b>CEO DigiLabs</b>
					<br><br>
					<a href="#"><img src="{{ asset('storage/img/facebook.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
					<a href="#"><img src="{{ asset('storage/img/twitter.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
					<a href="#"><img src="{{ asset('storage/img/instagram.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
				</div>
				<div class="col-sm-4 text-center">
					<img src="{{ asset('storage/img/nanda.jpg') }}" class="img-fluid tim" alt="Responsive image">
					<br><br>
					<center><h5><b>Moh. Nanda Rizky</b></h5></center>
					<i>UI/UX Designer</i>
					<br>
					<b>COO DigiLabs</b>
					<br><br>
					<a href="#"><img src="{{ asset('storage/img/facebook.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
					<a href="#"><img src="{{ asset('storage/img/twitter.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
					<a href="#"><img src="{{ asset('storage/img/instagram.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
				</div>
			</div>
		</div>
	</section>

	<section id="pembayaran">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Metode Pembayaran</h3>
			</div>
		</div>
		<div id="fitur">
			<div class="row justify-content-center">
				<div class="col-sm-2 col-3 text-center">
					<img src="{{ asset('storage/img/bri.png') }}" class="img-fluid" width="75px" height="75px" alt="Responsive image">
				</div>
				<div class="col-sm-2 col-3 text-center">
					<img src="{{ asset('storage/img/bni.png') }}" class="img-fluid" width="75px" height="75px" alt="Responsive image">
				</div>
				<div class="col-sm-2 col-3 text-center">
					<img src="{{ asset('storage/img/mandiri.png') }}" class="img-fluid" width="75px" height="75px" alt="Responsive image">
				</div>
				<div class="col-sm-2 col-3 text-center">
					<img src="{{ asset('storage/img/bca.png') }}" class="img-fluid" width="75px" height="75px" alt="Responsive image">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<b>Indodax.com</b> adalah Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
			</div>
			<div class="col-sm-2">
				<b>Tautan</b>
				<br>
				<a href="#"><img src="{{ asset('storage/img/home.png') }}" class="img-fluid" width="15px" height="15px" alt="Responsive image"> <span class="hitam"> Beranda</span></a>
				<br>
				<a href="#"><img src="{{ asset('storage/img/male.png') }}" class="img-fluid" width="15px" height="15px" alt="Responsive image"> <span class="hitam"> Tim Kami</span></a>
				<br>
				<a href="#"><img src="{{ asset('storage/img/fitur.png') }}" class="img-fluid" width="15px" height="15px" alt="Responsive image"> <span class="hitam"> Fitur</span></a>
				<br>
				<a href="#"><img src="{{ asset('storage/img/smartphone.png') }}" class="img-fluid" width="15px" height="15px" alt="Responsive image"> <span class="hitam"> Kontak</span></a>
				<br><br>
				<b>Social Media</b>
				<br>
				<a href="#"><img src="{{ asset('storage/img/facebook.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
				<a href="#"><img src="{{ asset('storage/img/twitter.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
				<a href="#"><img src="{{ asset('storage/img/instagram.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
				<a href="#"><img src="{{ asset('storage/img/google-plus.png') }}" class="img-fluid" width="30px" height="30px" alt="Responsive image"></a>
			</div>
			<div class="col-sm-4">
				<b>Alamat Kami</b>
				<br>
				<img src="{{ asset('storage/img/location.png') }}" class="img-fluid" width="15px" height="15px" alt="Responsive image"> Jalan Cisitu Lama II Nomor 127B/154C
				<br>
				<img src="{{ asset('storage/img/map.png') }}" class="img-fluid" width="15px" height="15px" alt="Responsive image"> Coblong, Bandung
				<br>
				<img src="{{ asset('storage/img/email.png') }}" class="img-fluid" width="15px" height="15px" alt="Responsive image"> wkwkwkland@gmail.com
				<br><br>
				<b>Jam Kerja</b>
				<br>
				Senin - Sabtu
				<br>
				07.00-22.00 WIB
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<hr>
				<font size="2">Copyright © 2018 <span class="biru">E-DIGI</span> All Rights Reserved.</font>
			</div>
		</div>
	</div>
</section>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
