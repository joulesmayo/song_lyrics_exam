<?php
include_once("connection.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete user based on id
    $result = mysqli_query($connect, "DELETE FROM table_song WHERE id=$id");

    // Redirect to homepage
    header("Location:index.php");
}
?>