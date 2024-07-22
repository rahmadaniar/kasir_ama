<?php
$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
//mengambil nilai dari form menggunakan $_POST
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

// Lakukan query INSERT dengan mysqli_query
$query = "INSERT INTO barang (nama, harga, stok) VALUES ('$nama', '$harga', '$stok')";
if ($koneksi->query($query) === TRUE) {
    header("location:index.php?pesan=input");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
