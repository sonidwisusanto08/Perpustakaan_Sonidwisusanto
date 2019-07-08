<?php
include "config.php";
?>
<html>
	<title>Tambah Penerbit</title>
	<form action="tambah_penerbit.php" method="post" name="form1">
	<table>
	<tr> 
        <td>ID penerbit :</td>
        <td><input type="text" name="id_penerbit"></td>
    </tr>
	<tr> 
    	<td>Penerbit :</td>
   		<td><input type="text" name="penerbit"></td>
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
        $id_penerbit = $_POST['id_penerbit'];
        $penerbit = $_POST['penerbit'];
        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO penerbit(id_penerbit,penerbit) VALUES('$id_penerbit','$penerbit')");

        // Show message when user added
        echo "Penerbit Berhasil Ditambahkan !!. <a href='penerbit.php'>Lihat Daftar</a>";
    }
    ?>
</html>