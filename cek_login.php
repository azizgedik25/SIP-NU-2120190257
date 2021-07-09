<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$daftar = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($daftar > 0){

 $data = mysqli_fetch_assoc($login);

  // buat session login dan username
  $_SESSION['username'] = $username;
  // alihkan ke halaman dashboard admin
  header("location:halaman_anggota.php");

?>
						