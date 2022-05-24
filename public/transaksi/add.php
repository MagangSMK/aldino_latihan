<?php
include_once("../../config/config.php");
?>
<html>
<head>
	<title>Add transaksi</title>
</head>
 
<body>
	<a href="../../index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form3">
		<table width="25%" border="0">
			<tr> 
				<td>idtransaksi</td>
				<td><input type="text" name="idtransaksi"></td>
			</tr>
			<tr> 
				<td>idpeminjam</td>
				<td><input type="text" name="idpeminjam"></td>
			</tr>
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
            <tr>
                <td>idbuku</td>
                <td><input type="text" name="idbuku"></td>
            </tr>
            <tr>
                <td>namabuku</td>
                <td><input type="text" name="namabuku"></td>
            </tr>
            <tr>
                <td>jumlahbuku</td>
                <td><input type="text" name="jumlahbuku"></td>
            </tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$idtransaksi = $_POST['idtransaksi'];
		$idpeminjam = $_POST['idpeminjam'];
		$nama = $_POST['nama'];
		$idbuku = $_POST['idbuku'];
		$namabuku = $_POST['namabuku'];
		$jumlahbuku = $_POST['jumlahbuku'];
		
		// include database connection file
		include_once("../../config/config.php");
				
		// Insert user data into table
		$result2 = mysqli_query($mysqli, "INSERT INTO transaksi(idtransaksi,idpeminjam,nama,idbuku,namabuku,jumlahbuku) VALUES('$idtransaksi','$idpeminjam','$nama','$idbuku','$namabuku','$jumlahbuku')");
		
		// Show message when user added
		echo "transaksi added successfully. <a href='../../index.php'>View Users</a>";
	}
	?>
</body>
</html>