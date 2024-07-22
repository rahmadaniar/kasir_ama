<?php 
$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
$id_barang = $_GET['id_barang'];

$query = "DELETE FROM barang WHERE id_barang='$id_barang'";
if ($koneksi->query($query) === TRUE) {
    header("location:index.php?pesan=hapus");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
