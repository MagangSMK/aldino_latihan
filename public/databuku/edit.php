<?php
// include database connection file
include_once("../../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	

    $idbuku = $_POST['idbuku'];

	$idbuku=$_POST['idbuku'];
	$namabuku=$_POST['namabuku'];
	$pengarang=$_POST['pengarang'];
    $penerbit=$_POST['penerbit'];
    $tahunterbit=$_POST['tahunterbit'];
    $jumlah=$_POST['jumlah'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE databuku SET idbuku='$idbuku',
    namabuku='$namabuku',
    pengarang='$pengarang',
    penerbit='$penerbit',
    tahunterbit='$tahunterbit',
    jumlah='$jumlah' WHERE idbuku=$idbuku");
	
	// Redirect to homepage to display updated user in list
	header("Location: ../../index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$idbuku = $_GET['idbuku'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM databuku WHERE idbuku=$idbuku");
 
while($user_data = mysqli_fetch_array($result))
{
	$idbuku = $user_data['idbuku'];
	$namabuku = $user_data['namabuku'];
	$pengarang = $user_data['pengarang'];
    $penerbit = $user_data['penerbit'];
    $tahunterbit = $user_data['tahunterbit'];
    $jumlah = $user_data['jumlah'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="../../index.php">Home</a>
	<br/><br/>
	
	<form name="update_databuku" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>idbuku</td>
				<td><input type="text" name="idbuku" value=<?php echo $idbuku;?>></td>
			</tr>
			<tr> 
				<td>namabuku</td>
				<td><input type="text" name="namabuku" value=<?php echo $namabuku;?>></td>
			</tr>
			<tr> 
				<td>pengarang</td>
				<td><input type="text" name="pengarang" value=<?php echo $pengarang;?>></td>
			</tr>
            <tr>
                <td>penerbit</td>
                <td><input type="text" name="penerbit" value=<?php echo $penerbit;?>></td>
            </tr>
            <tr>
                <td>tahunterbit</td>
                <td><input type="text" name="tahunterbit" value=<?php echo $tahunterbit;?>></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
			<tr>
				<td><input type="hidden" name="idbuku" value=<?php echo $_GET['idbuku'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>