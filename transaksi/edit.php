<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Transaksi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Transaksi</h1>
	</div>
	<br/>
 
	
	<a href="index.php">Lihat Semua Transaksi</a>
 
	<br/>
	<h3>Edit Transaksi</h3>
 
	<?php 
	$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
	$id_transaksi = $_GET['id_transaksi'];

	// Lakukan query SELECT untuk mendapatkan data barang dengan id_barang tertentu
	$query = "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'";
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
				<td>Total Transaksi</td>
				<td>
					<input type="hidden" name="id_transaksi" value="<?php echo $data['id_transaksi'] ?>">
					<input type="text" name="total_transaksi" value="<?php echo $data['total_transaksi'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Nominal Tunai</td>
				<td><input type="text" name="nominal_tunai" value="<?php echo $data['nominal_tunai'] ?>"></td>					
			</tr>	
			<tr>
				<td>Total Diskon</td>
				<td><input type="text" name="total_diskon" value="<?php echo $data['total_diskon'] ?>"></td>					
			</tr>	
            <tr>
				<td>Kembalian</td>
				<td><input type="text" name="kembalian" value="<?php echo $data['kembalian'] ?>"></td>					
			</tr>
            <tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>"></td>					
			</tr>		
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>

	<?php
	// Tutup koneksi database
	$koneksi->close();
	?>
</body>
</html>
