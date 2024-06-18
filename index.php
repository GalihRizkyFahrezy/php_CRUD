<?php
include 'database.php';

$sql = "SELECT * FROM items";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Staff Read</title>
</head>
<body>
    <div id="header">
        <button id="headerButton">Beranda</button>
        <button id="headerButton">Clients</button>
        <button id="headerButton" href="about.html">Tentang</button>
    </div>
    <h2>Clients</h2>
    <a class="btn btn-primary" href="create.php" style="margin-left: 1vw;">Buat Baru</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nama</td>
                <td>Position</td>
                <td>Hired Date</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if($result->num_rows >0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo "
            
            <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[description]</td>
                <td>$row[created_at]</td>
                <td>
                <a href='\web01\edit.php?id=".$row["id"]."' class='btn btn-primary'>Edit</a>
                <a href='\web01\delete.php?id=".$row["id"]."' class='btn btn-danger'>Delete</a>
                </td>
            </tr>
            ";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>