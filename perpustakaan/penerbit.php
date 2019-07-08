<?php
// Create database connection using config file
include_once("config.php");

// Fetch all kategori data from database
$result = mysqli_query($mysqli, "SELECT * FROM penerbit ORDER BY id_penerbit ASC");
?>
<html>
<head>    
    <title>Penerbit</title>
</head>
<body>
    <a href="index.php">GO HOME</a>
    <a href="tambah_penerbit.php">Tambah Penerbit</a><br/><br/>
    <table width='80%' border=1>

    <tr>
        <th>ID penerbit</th> <th>penerbit</th> <th>Action</th>
    </tr>
    <?php  
    while($data_penerbit = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data_penerbit['id_penerbit']."</td>";
        echo "<td>".$data_penerbit['penerbit']."</td>";
        echo "<td align='center'><a href='edit_penerbit.php?id_penerbit=$data_penerbit[id_penerbit]'>Edit</a> | <a href='delete_penerbit.php?id_penerbit=$data_penerbit[id_penerbit]'>Delete</a>";
        // echo "<td align='center'><a href='totalbuku.php?id_penerbit=$data_buku[id_penerbit].'>".$data_buku['penerbit']."</td></tr>";
    }
    ?>
    </table><form action="index.php" method="post" name="form1">
</body>
</html>