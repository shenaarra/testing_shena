<!DOCTYPE html>
<html>
<head>
	<title>Tugas 6</title>
</head>
<body bgcolor=#ccff66>
Nama: Shena Arrahima Qolby<br>
Kelas: 19.2B.05<br>
Nim: 19200663<br>
<h2><b>PEMESANAN TIKET PESAWAT</b></h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<pre>
Isikan Nama	  :<input type="text" name="nama">
Dari	  	  :<input type="text" name="dari">
Ke        	  :<input type="text" name="ke">
Kelas	  	  :<input type="radio" name="kelas" value="Bisnis">Bisnis <input type="radio" name="kelas" value="Ekonomi">Ekonomi
Berangkat 	  :<input type="text" name="brgkt">
<input type="submit" value="Oke"><input type="reset" value="Batal">
</pre>	
</form>
<hr>
<h2><b>TIKET</b></h2>
<?php
$Nama=$_POST['nama'];
$Dari=$_POST['dari'];
$Ke=$_POST['ke'];
$Kelas=$_POST['kelas'];
$Berangkat=$_POST['brgkt'];
if(!empty($Nama)){
echo "Nama : $Nama <br>"; }
if(!empty($Dari)){
echo "Dari : $Dari <br>"; }
if(!empty($Ke)){
echo "Ke   : $Ke <br>"; }
if(!empty($Kelas)){
echo "Kelas : $Kelas <br>"; }
if(!empty($Berangkat)){
echo "Berangkat : $Berangkat <br>"; }

 ?>
</body>
</html>