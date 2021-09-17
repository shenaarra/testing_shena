<!DOCTYPE html>
<html>
<head>
	<title>Tugas 4</title>
</head>
<body align="center" bgcolor= #6b6b47>
<?php 
	$nim="19200663";
	$nama="Shena Arrahima Qolby";
	$kelas="19.2B.05";

	echo "Nim : $nim<br>";
	echo "Nama : $nama<br>";
	echo "Kelas : $kelas<br>";

echo"<br>";
$teks1 = "Belajar Menghitung";
$teks2 = " Volume Bola";
$hasil = $teks1 . $teks2;

echo "<h2><b>$hasil</b></h2>";

define ('PHI', 3.14);
echo "Jari-Jari = 10<br>";
$r=10;
$v=4/3 * PHI *$r *$r *$r;
echo "Volume Bola = $v";


 ?>

</body>
</html>