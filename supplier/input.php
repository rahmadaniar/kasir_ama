<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD supplier</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD supplier</h1>
	</div>
	
	<br/>
 
	<a href="supplier/index.php">Lihat Semua Supplier</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>					
			</tr>
            <tr>
				<td>No Telp</td>
				<td><input type="text" name="no_telp"></td>					
			</tr>	
            <tr>
				<td>No Rekening</td>
				<td><input type="text" name="no_rekening"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>