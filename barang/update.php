<?php 
$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
// Ambil nilai dari form menggunakan $_POST
$id_barang = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

// Lakukan query UPDATE dengan mysqli
$query = "UPDATE barang SET nama='$nama', harga='$harga', stok='$stok' WHERE id_barang='$id_barang'";
if ($koneksi->query($query) === TRUE) {
    header("location:index.php?pesan=update");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
