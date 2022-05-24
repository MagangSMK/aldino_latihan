<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$idtransaksi = $_POST['idtransaksi'];
		$idpeminjam = $_POST['idpeminjam'];
		$nama = $_POST['nama'];
		$idbuku = $_POST['idbuku'];
		$namabuku = $_POST['namabuku'];
		$jumlahbuku = $_POST['jumlahbuku'];
	// update user data
	$result2 = mysqli_query($mysqli, "UPDATE transaksi SET idtransaksi='$idtransaksi',idpeminjam='$idpeminjam',nama='$nama',idbuku='$idbuku',jumlahbuku='$jumlahbuku' WHERE idtransaksi=$idtransaksi");
	
	// Redirect to homepage to display updated user in list
	header("Location:../../index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$idtransaksi = $_GET['idtransaksi'];
 
// Fetech user data based on id
$result2 = mysqli_query($mysqli, "SELECT * FROM transaksi WHERE idtransaksi=$idtransaksi");
 
while($user_data2 = mysqli_fetch_array($result2))
{
        $idtransaksi = $user_data2['idtransaksi'];
		$idpeminjam =$user_data2['idpeminjam'];
		$nama = $user_data2['nama'];
		$idbuku = $user_data2['idbuku'];
		$namabuku = $user_data2['namabuku'];
		$jumlahbuku = $user_data2['jumlahbuku'];
}
?>
<html>
<head>	
	<title>Edit User transaksi</title>
</head>
 
<body>
	<a href="../../index.php">Home</a>
	<br/><br/>
	
	<form name="update_data" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Id transaksi</td>
				<td><input type="text" name="idtransaksi" value=<?php echo $idtransaksi;?>></td>
			</tr>
			<tr> 
				<td>Id Peminjam</td>
				<td><input type="text" name="idpeminjam" value=<?php echo $idpeminjam;?>></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Id Buku</td>
				<td><input type="text" name="idbuku" value=<?php echo $idbuku;?>></td>
			</tr>
			<tr> 
				<td>Nama Buku</td>
				<td><input type="text" name="namabuku" value=<?php echo $namabuku;?>></td>
			</tr>
			<tr> 
				<td>Jumlah Buku</td>
				<td><input type="text" name="jumlahbuku" value=<?php echo $jumlahbuku;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="idpeminjam" value=<?php echo $_GET['idtransaksi'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>