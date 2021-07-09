<?php
include 'koneksi.php'; session_start();
?>
<html dir="ltr" lang="en-US">
<head>
	<title>Visi Misi</title>
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
				<li><a href="index.html">Beranda</a></li>
				<li><a href="kontak.php">Kontak Kami</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="daftar.html">Daftar</a></li>
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
    <b><h3><center><br>Visi Misi IPNU IPPNU</center></h3></b>
    <table border="1"cellspacing="3" cellpadding="10">
        <tr>
            <th>IPNU (Ikatan Pelajar Nahdlatul Ulama)</th>
            <th>IPPNU (Ikatan Pelajar Putri Nahdlatul Ulama)</th>
        </tr>
        <tr>
            <td>Visi</td>
            <td>Visi</td>
        </tr>
        <tr>
            <td>Terwujudnya IPNU yang Unggul dan Kolaboratif dalam Skala Nasional Dan Internasional berlandaskan Nilai Religius Nasionalis.</td>
            <td>Terbentuknya kesempurnaan Pelajar Putri Indonesia yang bertakwa, berakhlaqul karimah, berilmu, dan berwawasan kebangsaan.</td>
        </tr>
        <tr>
            <td>Misi</td>
            <td>Misi</td>
        </tr>
        <tr>
            <td>
                1. Menjadikan IPNU sebagai organisasi pelajar yang sistematis dalam kaderisasi, dan terstruktur dalam tata kelola organisasi.
                <br>
                2. Membentuk kader IPNU sebagai insan terpelajar, berwawasan global, bertindak profesional, dan produktif dalam berkarya.
                <br>
                3. Melakukan Internalisasi, Aktualisasi dan Desiminasi nilai-nilai Ahlu Sunnah wal-Jamaah An-Nahdliyyah.</td>
            <td>
                1. Membangun kader NU yang berkualitas, berakhlaqul karimah, bersikap demokratis dalam kehidupan bermasyarakat, berbangsa dan bernegara.
                <br>
                2. Mengembangkan wacana dan kualitas sumber dya kader menuju terciptanya kesetaraan gender.
                <br>
                3. Membentuk kader yang dinamis, kreatif, dan inovatif.</td>
        </tr>
</table>     
</div>
		<div id="footer"> &copy; 2021 by Siti Hidayah Nurul Azizah - TI-4B; PAC IPNU IPPNU Senori</div>
	</div>
</body>
</html>
