<!DOCTYPE html>
<html>
<head>
	<title>filter</title>
</head>
<body>
	<H1>BAROKAH MINIMARKET</H1>
	<a href="index.php" style="padding: 0.4% 0.8%;background-color: #009900;color: #fff;border-radius: 2px; text-decoration: none;">home</a><br><br>
	<form method="POST">
	<tr>
		<td>Range Harga Awal</td>
		<td>:</td>
		<td>
			<select name="awal" required="required">
				<option value=""> pilih range harga</option>
				<option value="0">0</option>
				<option value="1000">1000</option>
				<option value="5000">5000</option>
				<option value="10000">10000</option>
				<option value="1000">20000</option>
				<option value="5000">50000</option>
				<option value="10000">100000</option>
				<option value="10000">1000000</option>
				<option value="10000">10000000</option>
			</select>
        </td>
	</tr>
	<tr>
		<td>Data Range</td>
		<td>:</td>
		<td>
			<select name="akhir" required="required">
				<option value=""> pilih range harga</option>
				<option value="0">0</option>
				<option value="1000">1000</option>
				<option value="5000">5000</option>
				<option value="10000">10000</option>
				<option value="1000">20000</option>
				<option value="5000">50000</option>
				<option value="10000">100000</option>
				<option value="10000">1000000</option>
				<option value="10000">10000000</option>
			</select>
        </td>
	</tr>
	<button type="submit" name="ok">submit</button>
	</form>
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
		include ('conn.php');
		error_reporting(0);
		$hasil1 = $_POST['awal'];
		$hasil2 = $_POST['akhir'];

		if($hasil1 != ''){
			$query = mysqli_query($conn,"SELECT * FROM  barang WHERE harga_satuan BETWEEN $hasil1 AND $hasil2");
		}else{
			$query = mysqli_query($conn, "SELECT * FROM barang");
		}
		while ($data = mysqli_fetch_array($query)) {
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
</body>
</html>