<?php
include 'koneksi.php'; session_start();
?>
<html dir="ltr" lang="en-US"><head>
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
					<div class="kotak_login">
						<p class="tulisan_login">Silahkan login</p>				 
						<form action="halaman_anggota.php" method="POST"></br>
							<label>Username</label>
							<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
				 
							<label>Password</label>
							<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
				 
							<input type="submit" class="tombol_login" value="LOGIN" style="float: center; margin-right: 20px;">				 
							<br/>
							<br/>
						</form>
						<a href="daftar.php">
							<input type="submit" class="tombol_login" value="Daftar Anggota" style="float: center; margin-right: 20px;">
						</a>
					</div>
					</div></div>			

		<div id="footer"> &copy; 2021 by Siti Hidayah Nurul Azizah - TI-4B; PAC IPNU IPPNU Senori</div>
	</div>
</body>
</html>
