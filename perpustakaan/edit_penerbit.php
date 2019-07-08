<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for kategori update, then redirect to homepage after update
if(isset($_POST['update']))
{  
    $id_penerbit=$_POST['id_penerbit'];
    $penerbit=$_POST['penerbit'];

    // update kategori data
    $result = mysqli_query($mysqli, "UPDATE penerbit SET id_penerbit='$id_penerbit', penerbit='$penerbit' WHERE id_penerbit=$id_penerbit");

    // Redirect to homepage to display updated kategori in list
    header("Location: kategori.php");
}
?>
<?php
// Display selected kategori data based on id
// Getting id from url
$id_penerbit = $_GET['id_penerbit'];
// Fetech kategori data based on id
$result = mysqli_query($mysqli, "SELECT * FROM penerbit WHERE id_penerbit=$id_penerbit");
while($data_penerbit = mysqli_fetch_array($result))
{
    $id_penerbit = $data_penerbit['id_penerbit'];
    $penerbit = $data_penerbit['penerbit'];
}
?>
<html>
<head>  
    <title>Edit Penerbit</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_penerbit" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>ID Penerbit:</td>
                <td><input type="text" name="id_penerbit" value=<?php echo $id_penerbit;?>></td>
            </tr>
            <tr> 
                <td>Penerbit:</td>
                <td><input type="text" name="penerbit" value=<?php echo $penerbit;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_penerbit" value=<?php echo $_GET['id_penerbit'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>