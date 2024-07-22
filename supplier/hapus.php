<?php 
$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
$id_supplier = $_GET['id_supplier'];

$query = "DELETE FROM supplier WHERE id_supplier='$id_supplier'";
if ($koneksi->query($query) === TRUE) {
    header("location:index.php?pesan=hapus");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

$koneksi->close();
?>