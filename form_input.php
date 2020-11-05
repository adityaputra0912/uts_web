
<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN TAMBAH DATA</title>
</head>
<body>
	<H1>Tambah Data Barang</H1>
	<a href="index.php" style="padding: 0.4% 0.8%;background-color: #009900;color: #fff;border-radius: 2px; text-decoration: none;">HOME</a><br><br>
<form action="" method="POST">
	<table>
		<tr>
			<td>SKU</td>
			<td>:</td>
			<td><input type="text" name="SKU" placeholder="sku" required></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="nama barang" required></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>:</td>
			<td>
				<select name="kategori" required="require">
					<option value=""> Kategori Barang</option>
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
			<td><input type="text" name="jumlah" placeholder="jumlah stok" required></td>
		</tr>
		<tr>
			<td>Harga Satuan</td>
			<td>:</td>
			<td><input type="text" name="harga" placeholder="harga satuan" required></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="Submit" name="Simpan" placeholder="simpan"></td>
		</tr>
	</table>
</form>
  <?php
   include 'conn.php';
   if(isset($_POST['Simpan'])){
   $insert = mysqli_query($conn, "INSERT INTO barang VALUES 
   						 ('".$_POST['SKU']."',
   						  '".$_POST['nama']."',
   						  '".$_POST['kategori']."',
   						  '".$_POST['jumlah']."',
   						  '".$_POST['harga']."')");
   		if($insert){
   			echo 'berhasil menambah data';
   		}else{
   			echo 'gagal menambah data';
   		}
	}
  ?>
</body>
</html>