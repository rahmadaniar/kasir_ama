<?php 
$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
$id_transaksi = $_GET['id_transaksi'];

$query = "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'";
if ($koneksi->query($query) === TRUE) {
    header("location:index.php?pesan=hapus");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
