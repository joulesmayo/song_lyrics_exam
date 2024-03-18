<?php
    include_once("connection.php");

    if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $artist = $_POST["artist"];
        $lyrics = htmlspecialchars($_POST['lyrics'], ENT_QUOTES);


        if($title !="" && $artist !="" && $lyrics != ""){
            $sql = "INSERT INTO table_song(`title`, `artist`, `lyrics`) VALUES ('$title', '$artist', '$lyrics')";
            if(mysqli_query($connect,$sql)){
                header("location: index.php");
            }else{
                echo "An error has occurred.";
            }
        }else{
            echo "Fields are empty.";
        }

        

        
    }

    
?>  