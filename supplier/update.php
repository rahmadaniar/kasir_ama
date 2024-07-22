<?php 
$koneksi = new mysqli("localhost", "root", "", "kasir_ama");
// Ambil nilai dari form menggunakan $_POST
$id_supplier = $_POST['id_supplier'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$no_rekening = $_POST['no_rekening'];

// Lakukan query UPDATE dengan mysqli
$query = "UPDATE supplier SET nama='$nama', alamat='$alamat', email='$email', no_telp='$no_telp', no_rekening='$no_rekening' WHERE id_supplier='$id_supplier'";
if ($koneksi->query($query) === TRUE) {
    header("location:index.php?pesan=update");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
