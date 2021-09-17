<!DOCTYPE html>
<html>
<head>
	<title>Data Komentar</title>
</head>
<body>
<?php
	$Nama=$_POST['nama'];
	$Email=$_POST['email'];
	$Komentar=$_POST['komentar'];
?>
Nama Anda     : <?php echo $Nama; ?><br>
Email anda    : <?php echo $Email; ?><br>
Komentar Anda : <?php echo $Komentar; ?><br>

</body>
</html>