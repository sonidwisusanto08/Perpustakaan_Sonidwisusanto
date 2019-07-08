<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{  
    $id_buku=$_POST['id_buku'];
    $id_kategori=$_POST['id_kategori'];
    $judul=$_POST['judul'];
    $penerbit=$_POST['penerbit'];
    $penulis=$_POST['penulis'];

    // update buku data
    $result = mysqli_query($mysqli, "UPDATE buku SET id_buku='$id_buku',id_kategori='$id_kategori',judul='$judul', penerbit='$penerbit', penulis='$penulis' WHERE id_buku=$id_buku");

    // Redirect to homepage to display updated buku in list
    header("Location: index.php");
}
?>
<?php
// Display selected buku data based on id
// Getting id from url
$id_buku = $_GET['id_buku'];
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM buku WHERE id_buku=$id_buku");
while($data_buku = mysqli_fetch_array($result))
{
    $id_buku = $data_buku['id_buku'];
    $id_kategori = $data_buku['id_kategori'];
    $judul = $data_buku['judul'];
    $penerbit = $data_buku['penerbit'];
    $penulis = $data_buku['penulis'];
}
?>
<html>
<head>  
    <title>Edit Buku</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>ID buku:</td>
                <td><input type="text" name="id_buku" value=<?php echo $id_buku;?>></td>
            </tr>
            <tr> 
                <td>ID Kategori:</td>
                <td><input type="text" name="id_kategori" value=<?php echo $id_kategori;?>></td>
            </tr>
            <tr> 
                <td>Judul:</td>
                <td><input type="text" name="judul" value=<?php echo $judul;?>></td>
            </tr>
            <tr> 
                <td>Penerbit:</td>
                <td><input type="text" name="penerbit" value=<?php echo $penerbit;?>></td>
            </tr>
            <tr> 
                <td>penulis:</td>
                <td><input type="text" name="penulis" value=<?php echo $penulis;?>></td>
            </tr>
            
            <tr>
                <td><input type="hidden" name="id_buku" value=<?php echo $_GET['id_buku'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>