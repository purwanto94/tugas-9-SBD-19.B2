<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<h3>Tambah Pelanggan</h3>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="tambah-pelanggan.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama_pelanggan"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr> 
				<td>No HP</td>
				<td><input type="text" name="no_hp"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama_pelanggan'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($koneksi, "INSERT INTO pelanggan(nama_pelanggan,alamat,no_hp) VALUES('$nama','$alamat','$no_hp')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>