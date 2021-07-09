<?php
include 'koneksi.php'; session_start();
?>
<html dir="ltr" lang="en-US"><head>
	<title>Halaman Anggota</title>
	<link rel="stylesheet" type="text/css"
	media="all" href="style.css">
	<form action="cek_login.php" method="post">
</head>
<body>
	<div id="layout">
		<div id="header">
		<img src="sip-nu.png" class="header">
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="kontak.php">Kontak Kami</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="daftar.php">Daftar</a></li>
			</ul>
			</div>
		<div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
			Selamat Datang di Website Resmi PAC IPNU IPPNU Senori
		</marquee>
		</div>
		<div id="sidebar">
		<div class="widged">
		<img src="iklan.gif" class="gambariklan">
		</div>
		<div class="widged">
		<h1 class="judulwidged">Informasi</h1>
		<ul>
			<li> <a href="sejarah.php">Sejarah IPNU-IPPNU</a> </li>
			<li> <a href="visimisi.php">Visi Misi IPNU-IPPNU</a> </li>
			<li> <a href="progam.php">Progam/Kegiatan PAC IPNU IPPNU Senori</a> </li>
			<li> <a href="ipnu.php">Pengurus PAC IPNU Senori</a> </li>
			<li> <a href="ippnu.php">Pengurus PAC IPPNU Senori</a> </li>
		</ul>
		</div>
		</div>
		<div id="isi">
			<div class="isiposting">
				<p>
					<br><b>Silakan klik dibawah untuk gabung bersama pelajar NU</b>
			        <br><a href="http://bit.ly/pendaftarananggota-ipnu">1. Daftar Anggota IPNU</a>
			        <br><a href="http://bit.ly/pendaftarananggota-ippnu">1. Daftar Anggota IPPNU</a>
				</p>
				<?php
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
 }

 ?>
 <h1>Ini Halaman Admin</h1>

 <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
 <a href="logout.php">LOGOUT</a>

 <br/>
 <br/>


			</div>
		</div>
		<div id="footer"> &copy; 2021 by Siti Hidayah Nurul Azizah - TI-4B; PAC IPNU IPPNU Senori</div>
	</div>
</body>
</html>
