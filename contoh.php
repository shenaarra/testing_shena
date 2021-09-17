<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Luas Lingkaran</title>
</head>
<body>
<?php  
//konstanta untuk nilai judul
define("Judul", "Hitung luas lingkaran");
//konstanta untuk nilai phi
define("PHI", 3.14);
echo Judul;
$r=10;
echo"<br>jari-jari: $r <br>";
$luas=PHI * $r * $r;
echo"luas lingkaran= $luas";
?>

</body>
</html>