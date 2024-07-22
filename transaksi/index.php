<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD transaksi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD transaksi</h1>
	</div>
	<br/>
 
	<?php 
	// Memeriksa jika terdapat pesan dari parameter GET
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Transaksi berhasil di input.";
		}else if($pesan == "update"){
			echo "Transaksi berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Transaksi berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Transaksi Baru</a>
 
	<h3>Data barang</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Total Transaksi</th>
			<th>Nominal Tunai</th>
            <th>Total diskon</th>
            <th>Kembalian</th>
            <th>Tanggal</th>
			<th>Aksi</th>		
		</tr>
		<?php 
		$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
		$query = "SELECT * FROM transaksi";
		$result = mysqli_query($koneksi, $query);
		
		if (!$result) {
			die("Query gagal: " . mysqli_error($koneksi));
		}
		
		$nomor = 1;
		while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['total_transaksi']; ?></td>
			<td><?php echo $data['nominal_tunai']; ?></td>
			<td><?php echo $data['total_diskon']; ?></td>
            <td><?php echo $data['kembalian']; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
			<td>
				<a class="edit" href="edit.php?id_transaksi=<?php echo $data['id_transaksi']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id_transaksi=<?php echo $data['id_transaksi']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>

	
</body>
</html>
