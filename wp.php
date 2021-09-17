<html>
<head>
       <title>Title here!</title>
</head>
<body>
 
<h1>PENGINAPAN BUKIT INDAH</h1>
<h2>Form Pemesanan Kamar</h2>
<hr size=3 width=50% align=left color=black>
<form action="aksiwp.php" method="POST">
<pre>
Kode Kamar   <input type="text" name="kdkamar" size="10">
Nama Kamar   <input type=text name=nmkamar size=30>
Jenis Kamar  <select name=jnskamar>
             <option value="Single Room">Single Room
             <option value="Double Room">Double Room
             <option value="Family Room">Family Room
             </select><br>
 
Type Kamar   <input type=radio name= type value=VIP>VIP<br>
             <input type=radio name=type value=VVIP>VVIP<br>
Banyak Sewa  <input type="text" name="banyaksewa" size=3> Kamar
Lama Sewa    <input type="text" name="lamasewa" size=3> Malam
</pre>
 
<input type=submit name=submit value=Proses>
<input type=reset name=reset value=Batal>
 
</form>
</body>
</html