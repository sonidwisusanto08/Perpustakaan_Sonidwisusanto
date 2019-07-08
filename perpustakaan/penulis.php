<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM penulis ORDER BY id_penulis ASC");
?>
<html>
<head> 
    <title>Penulis</title>
</head>
<body>
    <a href="index.php">GO HOME</a>
    <a href="tambah_penulis.php">Tambah Penulis</a><br/><br/>
    <table width='80%' border=1>

    <tr>
        <th>ID penulis</th> <th>penulis</th> <th>Action</th>
    </tr>
    <?php  
    while($data_penulis = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data_penulis['id_penulis']."</td>";
        echo "<td>".$data_penulis['penulis']."</td>";
        echo "<td align='center'><a href='edit_penulis.php?id_penulis=$data_penulis[id_penulis]'>Edit</a> | <a href='delete_penulis.php?id_penulis=$data_penulis[id_penulis]'>Delete</a>";
        
    }
    ?>
    </table><form action="index.php" method="post" name="form1">
</body>
</html>