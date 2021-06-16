<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_pelanggan'];
	
	$nama=$_POST['nama_pelanggan'];
	$alamat=$_POST['alamat'];
	$hp=$_POST['no_hp'];
		
	// update user data
	$result = mysqli_query($koneksi, "UPDATE pelanggan SET nama_pelanggan='$nama',alamat='$alamat',no_hp='$hp' WHERE id_pelanggan=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id_pelanggan'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama = $user_data['nama_pelanggan'];
	$alamat = $user_data['alamat'];
	$hp = $user_data['no_hp'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit-pelanggan.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama_pelanggan" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr> 
				<td>No HP</td>
				<td><input type="text" name="no_hp" value=<?php echo $hp;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_pelanggan" value=<?php echo $_GET['id_pelanggan'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>