<html lang="en-US">
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
		<div id="kontak">
			<div class="kontak">
			<h2> Kontak Kami </h2><br>
				<form>
					<div id="isi">
				<table border="1" class="tablekontak" cellspacing="3" cellpadding="10">
				<tr>
					<td class="kolom1"> Nama Lengkap </td>
					<td class="kolom2"> <INPUT TYPE=text NAME=txtNama size="50"> </td>
				</tr>
				<tr>
					<td> E-mail </td>
					<td> <INPUT TYPE=text NAME=txtemail size="50"> </td>
				</tr>
				<tr>
					<td> No. HP </td>
					<td> <INPUT TYPE=text NAME=txtnohp size="50"> </td>
				</tr>
				<tr>
					<td> Kota </td>
					<td> <INPUT TYPE=text NAME=txtkota size="50"> </td>
				</tr>
				<tr>
					<td>  Pesan </td>
					<td> <textarea cols="80" rows="10"></textarea> </td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>	
				
				<tr>
					<td>&nbsp;</td>
					<td><INPUT TYPE=submit NAME=kirim value=&nbsp;&nbsp;kirim&nbsp;&nbsp;>&nbsp;&nbsp;<INPUT TYPE=Reset Name=reset Value=&nbsp;&nbsp;reset&nbsp;&nbsp;> </td>
				</tr>
				
			</table>
			</form>
			<br><b>Untuk info lebih lanjut silakan hubungi kami di bawah</b>
        <div class="img">
                <a href="https://www.instagram.com/pacipnuippnusenori/"><img src="ig.png" alt="" class="ig"></a>
                <a href="https://web.facebook.com/pac.senori"><img src="facebook.png" alt="" class="facebook"></a>
            </div>
			</div>
		</div>
		<div id="footer"> &copy; 2021 by Siti Hidayah Nurul Azizah - TI-4B; PAC IPNU IPPNU Senori</div>
	</div>
</body>
</html>
