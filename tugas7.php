<!DOCTYPE html>
<html>
<head>
	<title>Tugas 7</title>
</head>
<body>
<p>Nama: Shena Arrahima Qolby<br>
Kelas: 19.2B.05<br>
Nim: 19200663<br></p>
<h2>Rumus - Rumus</h2>
<form action="aksitugas7.php" method="POST">
	<table border="1">
		<tr>
			<td>Nilai 1</td>
			<td><input type="text" name="nilai1"></td>
		</tr>
		<tr>
			<td>Nilai 2</td>
			<td><input type="text" name="nilai2"></td>
		</tr>
		<tr align="center">
			<td colspan="2">
				<input type="radio" name="rumus" value="lyg">Layang-Layang<br>
				<input type="radio" name="rumus" value="jg">Jajar Genjang
			</td>
		</tr>
	</table>
	<input type="submit" value="hitung">
	<input type="reset" value="batal">
</form>
</body>
</html>