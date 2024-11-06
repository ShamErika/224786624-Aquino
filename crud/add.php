<?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $name =$_POST ['name'];
        $year =$_POST ['year'];


        if (!empty($name) && !empty($year)) {
            $sql= "INSERT INTO book (name, year) VALUES ('$name', '$year')";

            if ($conn->query ($sql)=== TRUE) {
                echo "New book added succesfully!";
            }
             else {
                echo "Failed to add new book";
            }
        }
        else {
            echo "Please fill in all fields";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>
<body>
    <h2>Add a New Book</h2>

    <form method = "post" action="add.php">
        Name: <input type="text" name="name"> <br><br>
        Year: <input type="text" name="year"> <br><br>
        <input type="submit" value = "Add Book">

    </form>
    <a href="index.php">Go Back</a>
</body>
</html>