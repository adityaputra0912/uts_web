<?php
  include ('conn.php');
  error_reporting(0);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>BAROKAH MINIMARKET</title>
</head>
<body>
	<H1>BAROKAH MINIMARKET</H1>
	<a href="form_input.php" style="padding: 0.4% 0.8%;background-color: #009900;color: #fff;border-radius: 2px; text-decoration: none;">Tambah Data</a><br><br>
	<a href="filter.php" style="padding: 0.4% 0.8%;background-color: #009900;color: #fff;border-radius: 2px; text-decoration: none;">filter</a><br><br>
	<form action="" method="POST">
		<label>Cari :</label>
			<input type="text" placeholder="cari data" name="cari">
			<input type="submit" value="Cari">
	</form><br>
	
            </table>
        </form>
	</div>
	<table style="margin-top: 15px;" border="1" cellspacing="0" width="50%">
		<tr style="text-align: center; font-weight: bold;background-color: #eee;">
			<td>SKU</td>
			<td>Nama Barang</td>
			<td>Kategori</td>
			<td>Jumlah Stok</td>
			<td>Harga Satuan</td>
			<td>Opsi</td>
		</tr>
		<?php 
			$query = $_POST['cari'];
			if($query != ''){
				$select = mysqli_query($conn, "SELECT * FROM barang WHERE SKU LIKE '%".$query."%' or nama_barang LIKE '%".$query."%' or kategori LIKE '%".$query."%' order by SKU asc ");
			}else{
				$select = mysqli_query($conn, "SELECT * FROM barang");
			}
			while ($data = mysqli_fetch_array($select)) {
	    ?>
	    <tr style="text-align: center;"> 
			<td><?php echo $data["SKU"]; ?></td> 
			<td><?php echo $data["nama_barang"];   ?></td> 
			<td><?php echo $data["kategori"];   ?></td>
			<td><?php echo $data["jumlah_stok"];   ?></td>
			<td><?php echo $data["harga_satuan"];   ?></td>
			<td>
				<a href="form_update.php?SKU=<?php echo $data['SKU'] ?>" style="padding: 0.4% 0.8%;
				background-color: #FFA100;color: #fff;border-radius: 2px; text-decoration: none;">Update</a>
				<a href="hapus.php?SKU=<?php echo $data['SKU'] ?>" style="padding: 0.4% 0.8%;
				background-color: #0030FF;color: #fff;border-radius: 2px; text-decoration: none;">Hapus</a>
			</td> 
          </tr>
        <?php } ?>
	</table>
</body>
</html>