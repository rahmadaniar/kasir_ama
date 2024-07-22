<?php 
$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
// Ambil nilai dari form menggunakan $_POST
$id_transaksi = $_POST['id_transaksi'];
$total_transaksi = $_POST['total_transaksi'];
$nominal_tunai = $_POST['nominal_tunai'];
$total_diskon = $_POST['total_diskon'];
$kembalian = $_POST['kembalian'];
$tanggal = $_POST['tanggal'];

// Lakukan query UPDATE dengan mysqli
$query = "UPDATE transaksi SET total_transaksi='$total_transaksi', nominal_tunai='$nominal_tunai', total_diskon='$total_diskon', kembalian='$kembalian', tanggal='$tanggal' WHERE id_transaksi='$id_transaksi'";
if ($koneksi->query($query) === TRUE) {
    header("location:index.php?pesan=update");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
