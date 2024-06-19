<?php

include("database.php");

$sql = "select * from mahasiswa";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <a href="create.php" class="btn btn-primary" style="margin:25px;">Buat Baru</a>
    <table class="table" style="margin:25px;">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nama</td>
                <td>Umur</td>
                <td>Jurusan</td>
                <td>Register Date</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            
            while($row=$result->fetch_assoc())
            {
                echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[nama]</td>
                    <td>$row[umur]</td>
                    <td>$row[jurusan]</td>
                    <td>$row[register_date]</td>
                    <td>
                        <a href='edit.php?id=$row[id]' class='btn btn-primary'>Edit</a>
                        <a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
                ";
            }

            ?>
        </tbody>
    </table>
</body>
</html>
