<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id=$_POST['id_mobil'];
	$no_plat=$_POST['no_plat'];
	$jenis=$_POST['jenis'];
	$merk=$_POST['merk'];
    $tahun=$_POST['tahun'];
	$warna=$_POST['warna'];
		
	// update user data
	$result = mysqli_query($koneksi, "UPDATE mobil SET no_plat='$no_plat',jenis='$jenis',merk='$merk',tahun='$tahun',warna='$warna' WHERE id_mobil=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id_mobil'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM mobil WHERE id_mobil=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$no_plat=$user_data['no_plat'];
	$jenis=$user_data['jenis'];
	$merk=$user_data['merk'];
    $tahun=$user_data['tahun'];
	$warna=$user_data['warna'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit-mobil.php">
		<table border="0">
			<tr> 
				<td>No Plat</td>
				<td><input type="text" name="no_plat" value=<?php echo $no_plat;?>></td>
			</tr>
			<tr> 
				<td>Jenis</td>
				<td><input type="text" name="jenis" value=<?php echo $jenis;?>></td>
			</tr>
			<tr> 
				<td>Merk</td>
				<td><input type="text" name="merk" value=<?php echo $merk;?>></td>
			</tr>
            <tr> 
				<td>Tahun</td>
				<td><input type="text" name="tahun" value=<?php echo $tahun;?>></td>
			</tr>
            <tr> 
				<td>Warna</td>
				<td><input type="text" name="tahun" value=<?php echo $warna;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_mobil" value=<?php echo $_GET['id_mobil'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>