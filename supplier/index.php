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
 
	<?php 
	// Memeriksa jika terdapat pesan dari parameter GET
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Supplier berhasil di input.";
		}else if($pesan == "update"){
			echo "Supplier berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Supplier berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Supplier Baru</a>
 
	<h3>Data Supplier</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
            <th>No Telp</th>
            <th>No Rekening</th>
			<th>Aksi</th>		
		</tr>
		<?php 
		$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
		$query = "SELECT * FROM supplier";
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
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['email']; ?></td>
            <td><?php echo $data['no_telp']; ?></td>
            <td><?php echo $data['no_rekening']; ?></td>
			<td>
				<a class="edit" href="edit.php?id_supplier=<?php echo $data['id_supplier']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id_supplier=<?php echo $data['id_supplier']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>

	
</body>
</html>
