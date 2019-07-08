<?php
include "config.php";
?>
<html>
    <title>Tambah Buku</title>
    <form action="add.php" method="post" name="form1">
    <table>
    <tr> 
        <td>ID buku :</td>
        <td><input type="text" name="id_buku"></td>
    </tr>
    <tr>
        <td>Kategori:</td>   
        <td>
        <select name="id_kategori">
            <?php
            include "config.php";
            $result = mysqli_query($mysqli, "SELECT * FROM kategori ORDER BY id_kategori ASC");
            while ($qtabel = mysqli_fetch_assoc($result))
            {
                echo '<option value="'.$qtabel['id_kategori'].'">'.$qtabel['kategori'].'</option>';             
            }
            ?>
        </select>
        </td>   
    </tr>
    <tr> 
        <td>Judul :</td>
        <td><input type="text" name="judul"></td>
    </tr>
    <tr> 
        <td>Penerbit :</td>
        <td><input type="text" name="penerbit"></td>
    </tr>
    <tr> 
        <td>Penulis :</td>
        <td><input type="text" name="penulis"></td>
    </tr>
    <tr> 
        <td></td>
        <td><input type="submit" name="Submit" value="Tambah"></td>
    </tr>
    </table>
    </form>

    <?php

    // Check If form submitted, insert form data into buku table.
    if(isset($_POST['Submit'])) {
        $id_buku = $_POST['id_buku'];
        $id_kategori = $_POST['id_kategori'];
        $judul = $_POST['judul'];
        $penerbit = $_POST['penerbit'];
        $penulis = $_POST['penulis'];
        // include database connection file
        include_once("config.php");

        // Insert buku data into table
        $result = mysqli_query($mysqli, "INSERT INTO buku(id_buku,id_kategori,judul,penerbit,penulis) VALUES('$id_buku','$id_kategori','$judul','$penerbit','$penulis')");

        // Show message when buku added
        echo "Buku Berhasil Ditambahkan !!. <a href='index.php'>Lihat Daftar</a>";
    }
    ?>
</html>