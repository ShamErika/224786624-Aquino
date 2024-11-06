<?php
    include 'db.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql= "SELECT * FROM book WHERE id=$id";
        $result=$conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $year = $row ['year'];

        } 
        else {
            echo "No book found with that id";
        }
    }


    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $year = $_POST['year'];
        $id=$_POST['id'];


        if (!empty($name) && !empty($year)) {
            $sql="UPDATE book SET name='$name', year='$year' WHERE id=$id";

            if ($conn->query($sql)=== TRUE) {
                echo "Book successfully updated.";
            } else {
                echo "Error editing record." . $sql . "<br>" . $conn->error;
            }

        } else {
            echo "Please fill in all fields.";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h2>Edit Book</h2>
    <form method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
        Year: <input type="text" name="year" value="<?php echo $year; ?>"><br><br>
        <input type="submit" value="Update Book">
    </form>
    <a href="index.php">Go Back</a>
</body>
</html>