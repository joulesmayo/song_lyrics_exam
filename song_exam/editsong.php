<?php
include_once("connection.php");

if(isset($_POST['update'])) {


    if(isset($_POST["title"]) && isset($_POST["artist"]) && isset($_POST["lyrics"]) ){

        $id = $_POST['id'];
        $title = $_POST["title"];
        $artist = $_POST["artist"];
        $lyrics = htmlspecialchars($_POST['lyrics'], ENT_QUOTES);

        $sql = "UPDATE table_song SET title='$title',artist='$artist',lyrics='$lyrics' WHERE id= $id";
        if(mysqli_query($connect,$sql)){
            header("location: index.php");
        }else{
            echo "An error has occurred.";
        }
    }
}
?>