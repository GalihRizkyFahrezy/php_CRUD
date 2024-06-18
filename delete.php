<?php
include 'database.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM items WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID tidak ditemukan";
    exit;
}

$conn->close();



?>