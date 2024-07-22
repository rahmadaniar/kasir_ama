<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Supplier</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Supplier</h1>
	</div>
	<br/>
 
	
	<a href="index.php">Lihat Semua Supplier</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
	$id_supplier = $_GET['id_supplier'];

	// Lakukan query SELECT untuk mendapatkan data barang dengan id_barang tertentu
	$query = "SELECT * FROM supplier WHERE id_supplier='$id_supplier'";
	$result = $koneksi->query($query);

	// Periksa apakah query berhasil dieksekusi
	if (!$result) {
	    die("Query error: " . $koneksi->error);
	}

	// Ambil data dari hasil query
	$data = $result->fetch_assoc();
	?>
	
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id_supplier" value="<?php echo $data['id_supplier'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>					
			</tr>	
            <tr>
				<td>No Telp</td>
				<td><input type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>"></td>					
			</tr>	
			<tr>
				<td>No Rekening</td>
				<td><input type="text" name="no_rekening" value="<?php echo $data['no_rekening'] ?>"></td>					
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
