<?php 
// koneksi database
include 'koneksi.php';
// menyimpan sementara data yang di kirim dari form ke variabel
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
// menginput data ke database
mysqli_query($koneksi,"insert into pesan values('','$name','$telephone','$email','$subject','$message')");
// mengalihkan halaman kembali ke index.php
header("location:index.html");
?>