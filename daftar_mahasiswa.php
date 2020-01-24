<!DOCTYPE HTML>
<html lang="en">

<?php

	session_start();
	if ($_SESSION['tingkatan'] == "Operator"){
		$sembunyi = "Hidden";
	}else{
		$sembunyi = "";
	}

?>


<head>
	<meta charset="utf-8">
	<title>Maxim - Modern One Page Bootstrap Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- =======================================================
    Theme Name: Maxim
    Theme URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
	======================================================= -->
</head>

<body>
	<?php

	include 'setting/koneksi.php';

	?>
	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="index.html">LP3I</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li <?php echo $sembunyi; ?>><a title="Data User" href="daftar_user.php">Data User</a></li>
							<li><a title="Daftar Matakuliah" href="Daftar_matakuliah.php">Daftar Matakuliah</a></li>
							<li <?php echo $sembunyi; ?>><a title="Data Dosen" href="daftar_dosen.php">Data Dosen</a></li>
							<li><a title="Data Mahasiswa" href="daftar_mahasiswa.php">Data Mahasiswa</a></li>
							<li><a title="Daftar Nilai" href="form_data_mahasiswa.php">Daftar Nilai</a></li>
							<li><a title="Log Out" href="index.php">Log Out</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
				<img src="img/logo-kecil.png" alt="" />
			</div>
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content">
										<strong>LULUS</strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										<strong>LANGSUNG</strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										<strong>LAKU</strong>
									</p>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</header>
	</div>
	<!-- spacer section -->
	<!-- end spacer section -->
	<!-- section: team -->
	<section id="about" class="section">
		<div class="container">
			<h4>Daftar Mahasiswa</h4>
<p><a href="form_input_data_mahasiswa.php">Tambah Mahasiswa</a></p>
<table border="1" cellpadding="5" width="100%">
	<thead>
		<tr align="center">
			<td>Nim</td>
			<td>Nama</td>
			<td>Jenis Kelamin</td>
			<td>Jurusan</td>
			<td>Kelas</td>
			<td>No Hp</td>
			<td>Aksi</td>
		</tr>
	</thead>

	<tbody>
		
		<?php
					
		include 'Model/data_seluruh_mahasiswa.php';
		while ($Mahasiswa=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $Mahasiswa['nim']; ?></td>
			<td><?php echo $Mahasiswa['nama']; ?></td>
			<td><?php echo $Mahasiswa['jenis_kelamin']; ?></td>
			<td><?php echo $Mahasiswa['jurusan']; ?></td>
			<td><?php echo $Mahasiswa['kelas']; ?></td>
			<td><?php echo $Mahasiswa['no_hp']; ?></td>
			<td><a href="form_edit_data_mahasiswa.php?nim=<?php echo $Mahasiswa['nim']; ?>">Edit</a> || <a href="controller/delete_mahasiswa.php?nim=<?php echo $Mahasiswa['nim']; ?>">Hapus</a></td>

		</tr>	

		<?php
		}
		?>	
		
	</tbody>
</table>
		</div>
		<!-- /.container -->
	</section>
	<!-- end section: team -->
	<!-- section: services -->
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
					</ul>
					<p class="copyright">
						&copy; Maxim Theme. All rights reserved.
						<div class="credits">
							<!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maxim
              -->
							Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
						</div>
					</p>
				</div>
			</div>
		</div>
		<!-- ./container -->
	</footer>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.localScroll.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/inview.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

</body>

</html>