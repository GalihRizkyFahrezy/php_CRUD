<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="create.php">
        <div class="mb-2">
            <label class="col-sm-1">Nama : </label>
            <input class="col-sm-3" type="text" name="nama"><br>
        </div>
        <div class="mb-2">
            <label class="col-sm-1">Umur : </label>
            <input class="col-sm-3" type="text" name="umur"><br>
        </div>
        <div class="mb-2">
            <label class="col-sm-1">Jurusan : </label>
            <input  class="col-sm-3" type="text" name="jurusan"><br>
        </div>
    
    <input class="btn btn-primary" type="submit" value="tambah data">
    </form>
</body>
</html>

<?php
include("database.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jurusan = $_POST['jurusan'];

    $sql= "insert into mahasiswa (nama, umur, jurusan) values ($nama,$umur,$jurusan);";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("location: index.php");
}
?>
