<!DOCTYPE html>
<html>
<head>
	<title>Tampilan tugas 7</title>
</head>
<body>
<?php
$nil1=$_POST['nilai1']; 
$nil2=$_POST['nilai2'];
$r=$_POST['rumus']; 
 ?>
 <p>Nama: Shena Arrahima Qolby<br>
Kelas: 19.2B.05<br>
Nim: 19200663<br></p>
 <h2>HASIL HITUNG RUMUS</h2>
 Nilai a adalah = <?php echo $nil1; ?> <br>
 Nilai b adalah = <?php echo $nil2; ?> <br>
 <?php 
if($nil1=="0" && $nil2="0")
	{ echo "Tidak ada hasil perhitungan"; }
else
{
	if($r=="lyg")
		{ $hasil=0.5*$nil1*$nil2;
			echo "Rumus yang dipilih adalah = Layang-Layang<br>
			Hasil perhitungan rumus = $hasil"; }
	else
		{ $hasil= $nil1*$nil2;
			echo"Rumus yang dipilih adalah = Jajar genjang<br>
			Hasil perhitungan rumus = $hasil"; }

}
  ?>
</body>
</html>
