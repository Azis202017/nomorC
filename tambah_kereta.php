<?php 

include 'koneksi.php';
$kecepatanRataRata = $_POST['kecepatan_rata_rata'];
$waktuDitempuh     = $_POST['waktu_ditempuh'];
$waktuTerlambat    = $_POST['waktu_terlambat'];
$total             = $_POST['total'];
$query             = mysqli_query($koneksi,"INSERT INTO tb_kereta VALUES('','$kecepatanRataRata','$waktuDitempuh','$waktuTerlambat','$total')");

?>