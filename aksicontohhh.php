<!DOCTYPE html>
<html>
<head>
	<title>Tugas 5</title>
</head>
<body bgcolor=#ff9999>
	<?php 
	$nim=$_POST['nimm'];
	$Nama=$_POST['nama'];
	$Kelas=$_POST['kelas'];
	$jekel=$_POST['jeniskel'];
	$almt=$_POST['alamat'];
	$smstr=$_POST['semester'];

	 ?>

<pre>
<h2>DATA DIRI Shena Arrahima Qolby</h2>
Nim           : <?php echo $nim; ?><br>
Nama          : <?php echo $Nama; ?><br>
Kelas         : <?php echo $Kelas; ?><br>
Jenis Kelamin : <?php echo $jekel; ?><br>
Alamat        : <?php echo $almt; ?><br>
Semester      : <?php echo $smstr; ?><br>
</pre>

</body>
</html>