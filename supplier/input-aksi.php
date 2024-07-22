<?php
$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
// Ambil nilai dari form menggunakan $_POST
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$no_rekening = $_POST['no_rekening'];

// Lakukan query INSERT dengan mysqli_query
$query = "INSERT INTO supplier (nama, alamat, email, no_telp, no_rekening) VALUES ('$nama', '$alamat', '$email', '$no_telp', '$no_rekening')";
if ($koneksi->query($query) === TRUE) {
    header("location:index.php?pesan=input");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
