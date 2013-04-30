<?php
include('config.php');
?>
 
<html>
<head>
<title>EDIT</title>
</head>
 
 <style type="text/css">
<!--
body {
	background-image: url(gambar/backgroundweb.jpg);
}
body,td,th {
	font-family: Times New Roman, Times, serif;
	font-size: 18px;
	color: #999999;
}
-->
</style></head>
 
<body>

<?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil meng-update data!</h3>';
}
?>

<h1>Postingan</h1>
	<tr>
			<td height="193"><img src="gambar/logo1.png" alt="logo01" width="609" height="118" /></td>
	</tr>
	<tr> <a href="index.php">+ Tambah Data</a> </tr>
 
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
			<td>no</td>
            <td>judul</td>
            <td>tgl</td>
            <td>bln</td>
            <td>thn</td>
            <td>isi</td>
        </tr>
    </thead>
    <tbody>
    <?php
    $query = mysql_query("select * from postingan");
 
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
			<td><?php echo $no; ?></td>
            <td><?php echo $data['judul']; ?></td>
            <td><?php echo $data['tgl']; ?></td>
            <td><?php echo $data['bln']; ?></td>
            <td><?php echo $data['thn']; ?></td>
            <td><?php echo $data['isi']; ?></td>
            <td>
    <a href="edit.php?id=<?php echo $data['post_id']; ?>">Edit</a> ||
    <a href="delete.php?id=<?php echo $data['post_id']; ?>">Hapus</a>
	
</td>
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>
</table>
</body>
</html>