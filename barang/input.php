<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD barang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD barang</h1>
	</div>
	
	<br/>
 
	<a href="barang/index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>					
			</tr>	
			<tr>
				<td>Stok</td>
				<td><input type="text" name="stok"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>