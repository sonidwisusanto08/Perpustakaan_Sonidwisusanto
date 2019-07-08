<?php
include "config.php";
?>
<html>
	<title>Tambah Penulis</title>
	<form action="tambah_penulis.php" method="post" name="form1">
	<table>
	<tr> 
        <td>ID penulis :</td>
        <td><input type="text" name="id_penulis"></td>
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

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_penulis = $_POST['id_penulis'];
        $penulis = $_POST['penulis'];
        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO penulis(id_penulis,penulis) VALUES('$id_penulis','$penulis')");

        // Show message when user added
        echo "Penulis Berhasil Ditambahkan !!. <a href='penulis.php'>Lihat Daftar</a>";
    }
    ?>
</html>