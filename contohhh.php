<!DOCTYPE html>
<html>
<head>
	<title>Tugas 5</title>
</head>
<body bgcolor=#ff9999>
<form action="aksitugas5.php" method="POST">
<pre>
<h2>INPUTKAN DATA DIRI ANDA</h2>
Nim           : <input type="text" name="nimm" size="25"><p>
Nama          : <input type="text" name="nama" size="25"><p>
Kelas         : <input type="text" name="kelas" size="25"><p>
Jenis Kelamin : <input type="radio" name="jeniskel" value="Laki-Laki">Laki - Laki <input type="radio" name="jeniskel" value="Perempuan">Perempuan
Alamat        : <textarea name="alamat" rows="5" cols="40"></textarea>
Semester      : <select name="semester">
				<option value="-pilih-">
				<option value="Semester 1">Semester 1
				<option value="Semester 2">Semester 2
				<option value="Semester 3">Semester 3
				</select>
<input type="submit" value="Submit"><input type="reset" value="Reset">
</pre>
</form>

</body>
</html>