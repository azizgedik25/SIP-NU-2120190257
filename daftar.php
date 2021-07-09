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
		<form action="simpan.php" method="POST"></br></form>
		<div id="isi">
		<table border="1" class="tablekontak" cellspacing="3" cellpadding="10">
			<h2 align="center">
				<tr>
					<td> Username </td>
					<td> : </td>
					<td><input type="text" name="nama" value=" " size="30px">
					</td>
				</tr>
				<tr>
					<td> Password </td>
					<td> : </td>
					<td><input type="text" name="nama" value=" " size="30px">
					</td>
				</tr>

				<tr>
					<td> Nama Lengkap </td>
					<td> : </td>
					<td><input type="text" name="nama" value=" " size="30px">
					</td>
				</tr>
				<tr>
					<td> Jenis Kelamin </td>
					<td> : </td>
						<td><input type="radio" name="jkel" value="L"> LAKI-LAKI
							<input type="radio" name="jkel" value="P"> PEREMPUAN</td>
				</tr>
				<tr>
					<td> Alamat </td>
					<td> : </td>
					<td><input type="text" name="alamat" value=" " size="25px"></td>
				</tr>
				<tr>
					<td> Email </td>
					<td> : </td>
					<td><input type="text" size="35px" name="Email" value=" "></td>
				</tr>
				<tr>
					<td> Tempat Tanggal Lahir </td>
					<td> : </td>
					<td><input type="text" name="ttl" value=" " size="25px"></td>
				</tr>
				<tr>
					<td> No WhatsApp </td>
					<td> : </td>
					<td><input type="text" size="25px" name="no" value=" "></td>
				</tr>
				<tr>
					<td> Pendidikan Terakhir </td>
					<td> : </td>
					<td><select name="pendidikan">
								  <option value="MI" selected="selected">SD/MI Sederajat</option>
								  <option value="MTS">SMP/MTs Sederajat</option>
								  <option value="MA">SMA/SMK/MA Sederajat</option>
								  <option value="S1">S1</option>
								  <option value="S2">S2</option>
								  <option value="Lainnya">Lainnya</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Delegasi</td>
					<td> : </td>
					<td><input type="text" size="25px" name="del" value=" "></td>
				</tr>
				<tr>
					<td>Jabatan/Status di Organisasi</td>
					<td> : </td>
					<td><input type="text" size="25px" name="jabatan" value=" "></td>
				</tr>
				<tr>
					<td>Tingkat Kepengurusan</td>
					<td> : </td> 
					<td><select name="tp">
								  <option value=" " selected="selected">Pimpinan Anak Cabang</option>
								  <option value=" ">Pimpinan Ranting</option>
								  <option value="MA">Pimpinan  Anak Ranting</option>
								  <option value=" ">Pimpinan Komisariat</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Wilayah</td>
					<td> : </td>
					<td><input type="text" size="25px" name="wil" value=" contoh : Sendang/MA Islamiyah"></td>
				</tr>
				<tr>
					<td>Periode</td>
					<td> : </td>
					<td><input type="text" size="25px" name="periode" value=" "></td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="tombol_login" value="DAFTAR" style="float: center; margin-right: 20px;">			
					</td>
				</tr>
				</h2>
				</table>
			</div>
		<div id="footer"> &copy; 2021 by Siti Hidayah Nurul Azizah - TI-4B; PAC IPNU IPPNU Senori</div>
	</div>
</body>
</html>
