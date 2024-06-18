<?php
include "database.php";

$name ="";
$description="";
$sql = "INSERT INTO items (name, description) VALUES('$name','$description')";


if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name = $_POST['name'];
    $description = $_POST['description'];

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form method="post">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $name?>">
        <label>Position</label>
        <input type="text" name="description" value="<?php echo $description?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>