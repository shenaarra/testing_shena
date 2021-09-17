<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$jnskamar=$_POST['jnskamar'];
	$type=$_POST['type'];
	$nmkamar=$_POST['nmkamar'];
	$kdkamar=$_POST['kdkamar'];
	$lamasewa=$_POST['lamasewa'];
	$banyaksewa=$_POST['banyaksewa'];

if ($jnskamar=="Single Room")
{
    $tarifsewa = 150000;
}
elseif ($jnskamar=="Double Room")
{
    $tarifsewa=200000;
}
else
{
    $tarifsewa=300000;
}

$subtotal= $tarifsewa * $lamasewa * $banyaksewa;

if ($type=="VVIP")
{
    $diskon=0.1*$subtotal;
}
else
{
    $diskon=0;
}

$total = $subtotal - $diskon;

echo"
<pre>
Kode Kamar       : $kdkamar
Nama Kamar     : $nmkamar
Jenis Kamar       : $jnskamar
Type Kamar       : $type
Tarif Sewa          : Rp $tarifsewa
Banyak Sewa     : $banyaksewa Kamar
Lama Sewa        : $lamasewa Hari
==================================
Subtotal              : Rp $subtotal
Diskon                 : Rp $diskon
==================================
Total                   : Rp $total
</pre>
<a href=wp.php>Booking Lagi</a>";

 ?>
</body>
</html>