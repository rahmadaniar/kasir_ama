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
 
	
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
	$id_barang = $_GET['id_barang'];
	//query SELECT untuk mendapatkan data barang dengan id_barang tertentu
	$query = "SELECT * FROM barang WHERE id_barang='$id_barang'";
	$result = $koneksi->query($query);
	//untuk periksa apakah query berhasil dieksekusi
	if (!$result) {
	    die("Query error: " . $koneksi->error);
	}

	$data = $result->fetch_assoc();
	?>
	
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id_barang'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>					
			</tr>	
			<tr>
				<td>Stok</td>
				<td><input type="text" name="stok" value="<?php echo $data['stok'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>

	<?php
	
	$koneksi->close();
	?>
</body>
</html>
