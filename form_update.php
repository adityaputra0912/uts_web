<?php
include 'conn.php';
$data_update = mysqli_query($conn, "SELECT  * FROM barang WHERE SKU= '".$_GET['SKU']."' ");
$result = mysqli_fetch_array($data_update);
?>

<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN UPDATE DATA</title>
</head>
<body>
	<H1>Update Data Barang</H1>
	<a href="index.php" style="padding: 0.4% 0.8%;background-color: #009900;color: #fff;border-radius: 2px; text-decoration: none;">HOME</a><br><br>
<form action="" method="POST">
	<table>
		<tr>
			<td>SKU</td>
			<td>:</td>
			<td><input type="text" name="Sku" value="<?php echo $result['SKU'] ?>" required></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $result['nama_barang'] ?>"  required></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>:</td>
			<td>
				<select name="Kategori" required="require">
					<option value="<?php echo $result['kategori'] ?>"><?php echo $result['kategori'] ?></option>
					<option value="elektronik">Elektronik</option>
					<option value="makanan">Makanan</option>
					<option value="minuman">Minuman</option>
					<option value="sembako">Sembako</option>
				</select>
				</div>
            </td>
		</tr>
		<tr>
			<td>Jumlah Stok</td>
			<td>:</td>
			<td><input type="text" name="jumlah" value="<?php echo $result['jumlah_stok'] ?>" required></td>
		</tr>
		<tr>
			<td>Harga Satuan</td>
			<td>:</td>
			<td><input type="text" name="harga" value="<?php echo $result['harga_satuan'] ?>" required></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="Submit" name="update" placeholder="UPDATE"></td>
		</tr>
	</table>
</form>
	<?php
		include "conn.php";
		if(isset($_POST['update'])) {
			$update = mysqli_query($conn, "UPDATE barang SET 
								   SKU = '".$_POST['Sku']."', 
								   nama_barang = '".$_POST['nama']."',  
								   kategori = '".$_POST['Kategori']."',
								   jumlah_stok = '".$_POST['jumlah']."',
								   harga_satuan = '".$_POST['harga']."'
								   WHERE SKU = '".$_GET['SKU']."' ");
			if($update){
				echo 'berhasil update';
			}else{
				echo 'gagal update';
			}
	}
	?>
</body>
</html>