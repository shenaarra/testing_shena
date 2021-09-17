<!DOCTYPE html>
<html>
<head>
	<title>Perulangan for</title>
</head>
<body>
Menggunakan WHILE
<br>
<?php 
echo "<form name = form1 method=post>";
echo"Tanggal";
echo"<select name = tanggal>";
for ($tanggal = 1; $tanggal <= 31; $tanggal++)
{
	echo"<option value=".$tanggal.">".$tanggal."</option>";
}
echo"</select>";
echo"</from>";

 ?>

</body>
</html>