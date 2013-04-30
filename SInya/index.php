
<html>
<head>
<title>MUJAHIDIN BLOGSITE</title>
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
	<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
         // General options
         mode : "textareas",
         theme : "advanced",
});
</script>

<?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil menambah data!</h3>';
}
?>
<table width="750" height="391" border="1" align="center">
  <tr>
    <td height="193"><img src="gambar/logo1.png" alt="logo01" width="609" height="118" /></td>
  </tr>
  <tr>
    <td height="137"><table width="750" border="0" align="center">
        <form id="form1" name="form1" method="post" action="insert.php">
			
			Judul :
			<input type="text" name="judul"><br><br>
			
			 Tanggal : 
  <select name="tgl">
      <?php
        for($tgl=1;$tgl<=31;$tgl++){
            echo "<option value=$tgl>$tgl</option>";
        }
    ?>
  </select>
  <select name="bln">
      <?php
        for($bln=1;$bln<=12;$bln++){
            echo "<option value=$bln>$bln</option>";
        }
    ?>
  </select>
  <select name="thn">
      <?php
        for($thn=1990;$thn<=2012;$thn++){
            echo "<option value=$thn>$thn</option>";
        }
    ?>
  </select><br><br>
			
			isi : <textarea name="isi"></textarea>
			<p>
				<input type="submit" name="Submit" value="Submit" />
			</p>
		
        </form>		
  </tr>
</table>
<a href="view.php">Lihat Data</a>
</body>
</html>
