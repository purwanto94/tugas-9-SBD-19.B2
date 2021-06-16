<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<h3>Tambah Mobil</h3>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="tambah-mobil.php" method="post" name="form1">
		<table width="25%" border="0">
            <tr> 
				<td>No Plat</td>
				<td><input type="text" name="no_plat"></td>
			</tr>
			<tr> 
				<td>Jenis</td>
				<td><input type="text" name="jenis"></td>
			</tr>
			<tr> 
				<td>Merk</td>
				<td><input type="text" name="merk"></td>
			</tr>
            <tr> 
				<td>Tahun</td>
				<td><input type="text" name="tahun"></td>
			</tr>
            <tr> 
				<td>Warna</td>
				<td><input type="text" name="warna"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) 
    {
        $no_plat=$_POST['no_plat'];
        $jenis=$_POST['jenis'];
        $merk=$_POST['merk'];
        $tahun=$_POST['tahun'];
        $warna=$_POST['warna'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($koneksi, "INSERT INTO mobil(no_plat,jenis,merk,tahun,warna) VALUES('$no_plat','$jenis','$merk','$tahun','$warna')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>