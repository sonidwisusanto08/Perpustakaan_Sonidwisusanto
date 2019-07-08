<?php
include "config.php";
?>
<html>
	<title>Tambah Kategori</title>
	<form action="tambah_kategori.php" method="post" name="form1">
	<table>
	<tr> 
        <td>ID Kategori :</td>
        <td><input type="text" name="id_kategori"></td>
    </tr>
	<tr> 
    	<td>Kategori :</td>
   		<td><input type="text" name="kategori"></td>
    </tr>
    <tr> 
        <td></td>
        <td><input type="submit" name="Submit" value="Tambah"></td>
    </tr>
	</table>
	</form>

	<?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_kategori = $_POST['id_kategori'];
        $kategori = $_POST['kategori'];
        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kategori(id_kategori,kategori) VALUES('$id_kategori','$kategori')");

        // Show message when user added
        echo "Kategori Berhasil Ditambahkan !!. <a href='kategori.php'>Lihat Daftar</a>";
    }
    ?>
</html>