<!DOCTYPE html>
<html>
<head>
	<title>Tugas 5</title>
</head>
<body bgcolor=#ff9999>
<form action="aksitugas5.php" method="POST">
<pre>
<h2>INPUTKAN DATA DIRI ANDA</h2>
Nim           : <input type="text" name="nimm" size="25">
Nama          : <input type="text" name="nama" size="25">
Kelas         : <input type="text" name="kelas" size="25">
Jenis Kelamin : <input type="radio" name="jeniskel" value="Laki-Laki">Laki - Laki <input type="radio" name="jeniskel" value="Perempuan">Perempuan
Alamat        : <textarea name="alamat" rows="5" cols="40"></textarea>
Semester      : <select name="semester">
				<option value="-pilih-">-pilih-
				<option value="1">1
				<option value="2">2
				<option value="3">3
				</select>
<input type="submit" value="Submit"><input type="reset" value="Reset">
</pre>
</form>

</body>
</html>