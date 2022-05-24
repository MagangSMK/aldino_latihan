<?php
include_once("config/config.php");

// Create database connection using config file


// Fetch all users data from database



?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="public/databuku/add.php">Add New Data</a>
 
    <table width="80%" border=1>
        <?php 
        $result = mysqli_query($mysqli, "SELECT * FROM databuku ORDER BY idbuku asc");
        ?>
 
    <tr>
     <th>Id Buku</th> 
     <th>Nama Buku</th> 
     <th>Pengarang</th> 
     <th>Penerbit</th> 
     <th>Tahun Terbit</th> 
     <th>Jumlah</th> 
     <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>". $idbuku = $user_data['idbuku']."</td>";
		echo "<td>".$namabuku =$user_data['namabuku']."</td>";
		echo "<td>".$pengarang = $user_data['pengarang']."</td>";
		echo "<td>".$penerbit = $user_data['penerbit']."</td>";
		echo "<td>".$tahunterbit = $user_data['tahunterbit']."</td>";
		echo "<td>".$jumlah = $user_data['jumlah']."</td>";    
        echo "<td><a  href=' public/databuku/edit.php?idbuku=$user_data[idbuku]'>Edit</a> | <a href='public/databuku/delete.php?idbuku=$user_data[idbuku]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>

    <br>
    <br>

<a href="public/peminjam/add.php">Add New Data</a>
 
    <table width="80%" border=1>
        <?php
        $result1 = mysqli_query($mysqli, "SELECT * FROM peminjam ORDER BY idpeminjam ASC");
        ?>
 
    <tr>
     <th>Id Peminjam</th> 
     <th>Nama</th> 
     <th>Jurusan</th> 
     <th>Semester</th> 
     <th>Angkatan</th> 
     <th>Jumlah</th> 
     <th>Update</th>
    </tr>
    <?php 
    while($user_data1 = mysqli_fetch_array($result1)) {         
        echo "<tr>";
        echo "<td>".$idpeminjam = $user_data1['idpeminjam']."</td>";
		echo "<td>".$nama =$user_data1['nama']."</td>";
        echo "<td>".$jurusan = $user_data1['jurusan']."</td>";
		echo "<td>".$semester = $user_data1['semester']."</td>";
		echo "<td>".$angkatan = $user_data1['angkatan']."</td>";
		echo "<td>".$jumlah = $user_data1['jumlah']."</td>";    
        echo "<td><a  href=' public/peminjam/edit.php?idpeminjam=$user_data1[idpeminjam]'>Edit</a> | <a href='public/peminjam/delete.php?idpeminjam=$user_data1[idpeminjam]'>Delete</a></td></tr>";
    }
    ?>
    </table>

    <br>
    <br>
 
<body>
<a href="public/transaksi/add.php">Add New Transaksi</a>
 
    <table width="80%" border=1>
        <?php
        
        $result2 = mysqli_query($mysqli, "SELECT * FROM transaksi ORDER BY idtransaksi ASC");
        ?>
 
    <tr>
     <th>Id Transaksi</th> 
     <th>Id Peminjam</th> 
     <th>Nama</th> 
     <th>Id Buku</th> 
     <th>Nama Buku</th> 
     <th>Jumlah Buku</th>
    </tr>
    <?php  

    while($user_data2 = mysqli_fetch_array($result2)) {         
        echo "<tr>";
        echo "<td>".$idtransaksi = $user_data2['idtransaksi']."</td>";
		echo "<td>".$idpeminjam =$user_data2['idpeminjam']."</td>";
		echo "<td>".$nama = $user_data2['nama']."</td>";
		echo "<td>".$idbuku = $user_data2['idbuku']."</td>";
		echo "<td>".$namabuku = $user_data2['namabuku']."</td>";
		echo "<td>".$jumlahbuku = $user_data2['jumlahbuku']."</td>";   
        
    }
    ?>
    </table>
</body>
</html>