<?php
$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
// Ambil nilai dari form menggunakan $_POST
$total_transaksi = $_POST['total_transaksi'];
$nominal_tunai = $_POST['nominal_tunai'];
$total_diskon = $_POST['total_diskon'];
$kembalian = $_POST['kembalian'];
$tanggal = $_POST['tanggal'];

// Lakukan query INSERT dengan mysqli_query
$query = "INSERT INTO transaksi (total_transaksi, nominal_tunai, total_diskon, kembalian, tanggal) VALUES ('$total_transaksi', '$nominal_tunai', '$total_diskon', '$kembalian', '$tanggal')";
if ($koneksi->query($query) === TRUE) {
    header("location:index.php?pesan=input");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
