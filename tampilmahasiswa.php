<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
<?php 
$Nama=$_GET['nama'];
$Alamat=$_GET['alamat'];
$Jenis=$_GET['jeniskel'];
$kerja=$_GET['pekerjaan'];
$Hobi1=$_GET['hobi1'];
$Hobi2=$_GET['hobi2'];
$Hobi3=$_GET['hobi3'];
 ?>
 <table border=1 bgcolor="cyan">
 	<tr>
 		<td colspan=2 align="center"><b>Data Mahasiswa</b></td>
 	</tr>
 	<tr>
 		<td>Nama</td><td><?php echo $Nama; ?></td>
 	</tr>
 	<tr>
 		<td>Alamat</td><td><?php echo $Alamat; ?></td>
 	</tr>
 	<tr>
 		<td>Jenis Kelamin</td><td><?php echo $Jenis; ?></td>
 	</tr>
 	<tr>
 		<td>Pekerjaan</td><td><?php echo $kerja; ?></td>
 	</tr>
 	<tr>
 		<td>Hobi</td><td><?php echo $Hobi1,",",$Hobi2,",",$Hobi3; ?></td>
 	</tr>
 </table>


</body>
</html>