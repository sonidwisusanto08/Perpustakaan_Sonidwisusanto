<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for kategori update, then redirect to homepage after update
if(isset($_POST['update']))
{  
    $id_kategori=$_POST['id_kategori'];
    $kategori=$_POST['kategori'];

    // update kategori data
    $result = mysqli_query($mysqli, "UPDATE kategori SET id_kategori='$id_kategori', kategori='$kategori' WHERE id_kategori=$id_kategori");

    // Redirect to homepage to display updated kategori in list
    header("Location: kategori.php");
}
?>
<?php
// Display selected kategori data based on id
// Getting id from url
$id_kategori = $_GET['id_kategori'];
// Fetech kategori data based on id
$result = mysqli_query($mysqli, "SELECT * FROM kategori WHERE id_kategori=$id_kategori");
while($data_kategori = mysqli_fetch_array($result))
{
    $id_kategori = $data_kategori['id_kategori'];
    $kategori = $data_kategori['kategori'];
}
?>
<html>
<head>  
    <title>Edit Kategori</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_kategori" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>ID Kategori:</td>
                <td><input type="text" name="id_kategori" value=<?php echo $id_kategori;?>></td>
            </tr>
            <tr> 
                <td>Kategori:</td>
                <td><input type="text" name="kategori" value=<?php echo $kategori;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_kategori" value=<?php echo $_GET['id_kategori'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>