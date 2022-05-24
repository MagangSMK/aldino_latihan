<?php
include_once("../../config/config.php");
?>
<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="../../index.php">Go to Home</a>
	<br><br>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>idbuku</td>
				<td><input type="text" name="idbuku"></td>
			</tr>
			<tr> 
				<td>namabuku</td>
				<td><input type="text" name="namabuku"></td>
			</tr>
			<tr> 
				<td>pengarang</td>
				<td><input type="text" name="pengarang"></td>
			</tr>
			<tr> 
                <td>penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
                <td>tahunterbit</td>
                <td><input type="text" name="tahunterbit"></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$idbuku = $_POST['idbuku'];
		$namabuku = $_POST['namabuku'];
		$pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $tahunterbit = $_POST['tahunterbit'];
        $jumlah = $_POST['jumlah'];
		
		// include database connection file
		include_once("../../config/config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO databuku(idbuku,namabuku,pengarang,penerbit,tahunterbit,jumlah) VALUES('$idbuku','$namabuku','$pengarang','$penerbit','$tahunterbit','$jumlah')");
		
		// Show message when user added
		echo "data added successfully. <a href='../../index.php'>View Users</a>";
	}
	?>
</body>
</html>