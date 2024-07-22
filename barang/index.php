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
 
	<?php 
	// Memeriksa jika terdapat pesan dari parameter GET
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Barang Baru</a>
 
	<h3>Data barang</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Aksi</th>		
		</tr>
		<?php 
		$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
		$query = "SELECT * FROM barang";
		$result = mysqli_query($koneksi, $query);
		
		if (!$result) {
			die("Query gagal: " . mysqli_error($koneksi));
		}
		
		$nomor = 1;
		while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['stok']; ?></td>
			<td>
				<a class="edit" href="edit.php?id_barang=<?php echo $data['id_barang']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id_barang=<?php echo $data['id_barang']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>

	
</body>
</html>
