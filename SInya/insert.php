<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form
$judul = $_POST['judul'];
$tgl = $_POST['tgl'];
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$isi = $_POST['isi']; 
//simpan data ke database
$query = mysql_query("insert into postingan values('', '$judul', '$tgl', '$bln', '$thn', '$isi')") or die(mysql_error());
 
if ($query) {
    header('location:index.php?message=success');
}
?>