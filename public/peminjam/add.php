<?php
include_once("../../config/config.php");
?>
<html>
<head>
	<title>Add Data</title>
</head>
 
<body>
	<a href="../../index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form2">
		<table width="25%" border="0">
			<tr> 
				<td>idpeminjam</td>
				<td><input type="text" name="idpeminjam"></td>
			</tr>
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
            <tr>
                <td>semester</td>
                <td><input type="text" name="semester"></td>
            </tr>
            <tr>
                <td>angkatan</td>
                <td><input type="text" name="angkatan"></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah"></td>
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
		$idpeminjam = $_POST['idpeminjam'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
        $semester = $_POST['semester'];
        $angkatan = $_POST['angkatan'];
        $jumlah = $_POST['jumlah'];
		
		// include database connection file
		include_once("../../config/config.php");
				
		// Insert user data into table
		$result1 = mysqli_query($mysqli, "INSERT INTO peminjam(idpeminjam,nama,jurusan,semester,angkatan,jumlah) VALUES('$idpeminjam','$nama','$jurusan','$semester','$angkatan','$jumlah')");
		
		// Show message when user added
		echo "data added successfully. <a href='../../index.php'>View Users</a>";
	}
	?>
</body>
</html>