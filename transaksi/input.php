<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD transaksi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD transaksi</h1>
	</div>
	
	<br/>
 
	<a href="transaksi/index.php">Lihat Semua Transaksi</a>
 
	<br/>
	<h3>Input transaksi baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Total Transaksi</td>
				<td><input type="text" name="total_transaksi"></td>					
			</tr>	
			<tr>
				<td>Nominal Tunai</td>
				<td><input type="text" name="nominal_tunai"></td>					
			</tr>	
			<tr>
				<td>Total Diskon</td>
				<td><input type="text" name="total_diskon"></td>					
			</tr>	
            <tr>
				<td>Kembalian</td>
				<td><input type="text" name="kembalian"></td>					
			</tr>
            <tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>