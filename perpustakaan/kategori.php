<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM kategori ORDER BY id_kategori ASC");
?>
<html>
<head>    
    <title>Kategori</title>
</head>
<body>
    <a href="index.php">GO HOME</a>
    <a href="tambah_kategori.php">Tambah Kategori</a><br/><br/>
    <table width='80%' border=1>

    <tr>
        <th>ID kategori</th> <th>kategori</th> <th>Action</th>
    </tr>
    <?php  
    while($data_kategori = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data_kategori['id_kategori']."</td>";
        echo "<td>".$data_kategori['kategori']."</td>";
        echo "<td align='center'><a href='edit_kategori.php?id_kategori=$data_kategori[id_kategori]'>Edit</a> | <a href='delete_kategori.php?id_kategori=$data_kategori[id_kategori]'>Delete</a>";
        // echo "<td align='center'><a href='totalbuku.php?id_penerbit=$data_buku[id_penerbit].'>".$data_buku['penerbit']."</td></tr>";
    }
    ?>
    </table><form action="index.php" method="post" name="form1">
</body>
</html>