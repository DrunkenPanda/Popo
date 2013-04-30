<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form
$id = $_POST['post_id'];
$judul = $_POST['judul'];
$tgl = $_POST['tgl'];
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$isi = $_POST['isi']; 
//update data di database sesuai user_id
$query = mysql_query("update postingan set judul='$judul', tgl='$tgl', bln='$bln', thn='$thn', isi='$isi' where post_id ='$id'") or die(mysql_error());
 
if ($query) {
    header('location:view.php?message=success');
}
?>