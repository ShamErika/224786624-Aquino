<?php 
include "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql= "DELETE FROM book WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        // Instead of echoing, you could pass a success message to the index page via a GET or session variable if needed.
        header("Location: index.php?message=Book+successfully+deleted");
        exit();
    } else {
        // Alternatively, redirect with an error message
        header("Location: index.php?error=Error+deleting+record");
        exit();
    }
} else {
    header("Location: index.php?error=Invalid+ID");
    exit();
}
?>