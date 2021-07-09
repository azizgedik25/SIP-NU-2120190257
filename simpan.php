<?php
include 'koneksi.php'; session_start();
?>
<html dir="ltr" lang="en-US">
<head>
	<title>SIP-NU Senori</title>
	<link rel="stylesheet" type="text/css"
	media="all" href="style.css">
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
		<?php
		// cek apakah yang mengakses halaman ini sudah login
				 if($_SESSION['level']==""){
				  header("location:daftar.php?pesan=gagal");
				 }
			$username = $_POST["username"];
			$password = $_POST["password"];
			$nama = $_POST["nama"];
			$jkel = $_POST["jkel"];
			$alamat = $_POST["alamat"];
			$Email = $_POST["Email"];
			$ttl = $_POST["ttl"];
			$no = $_POST["no"];
			$pendidikan = $_POST["pendidikan"];
			$del = $_POST["del"];
			$jabatan = $_POST["jabatan"];
			$tp = $_POST["tp"];
			$wil = $_POST["wil"];
			$periode = $_POST["periode"];

			$data = mysql_query("INSERT INTO  `sip_nu`.`pendaftaran` (
			`USERNAME`, `PASSWORD`, `NAMA LENGKAP`, `JENIS KELAMIN`, `ALAMAT`, `EMAIL`, `TTL`, `NO WHATSAPP`, `PENDIDIKAN TERAKHIR`, `DELEGASI`, `JABATAN/STATUS DI ORGANISASI`, `TINGKAT KEPENGURUSAN`, `WILAYAH`, `PERIODE`
			)
			VALUES (
			'',  '$nama',  '$jkel',  '$alamat',  '$Email',  '$ttl',  '$no',  '$pendidikan',  '$jabatan',  '$tp',  '$wil', `periode`
			)");
			echo "Data Berhasil di Simpan!";
			?>
	</div>
		<div id="footer"> &copy; 2021 by Siti Hidayah Nurul Azizah - TI-4B; PAC IPNU IPPNU Senori</div>
	</div>
</body>
</html>
