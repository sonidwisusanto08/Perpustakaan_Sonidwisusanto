<?php
// konek pada file database
include_once("config.php");

// memanggil prosedur untuk menampilkan data buku
$result = mysqli_query($mysqli, "SELECT * FROM buku ORDER BY id_buku ASC");
?>

<html>
<head>    
    <title>SoniDwiSusanto</title>
</head>

<body>
<a href="add.php">Tambah Buku</a>
<a href="penulis.php">Penulis</a>
<a href="penerbit.php">Penerbit</a>
<a href="kategori.php">kategori</a><br/><br/>


    <table width='80%' border=1>

    <tr>
        <th>ID Buku</th> <th>Judul</th> <th>Kategori</th>  <th>Penerbit</th> <th>Penulis</th> <th>Action</th>
    </tr>
    <?php  
    while($data_buku = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data_buku['id_buku']."</td>";
        echo "<td>".$data_buku['judul']."</td>";
        echo "<td>".$data_buku['id_kategori']."</td>";
        echo "<td>".$data_buku['penerbit']."</td>";
        echo "<td>".$data_buku['penulis']."</td>";
        echo "<td align='center'><a href='edit.php?id_buku=$data_buku[id_buku]'>Edit</a> |
         <a href='delete.php?id_buku=$data_buku[id_buku]'>Delete</a>";
        
    }
    ?>
    </table>
</body>
</html>