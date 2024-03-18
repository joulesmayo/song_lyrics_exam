<?php
    define("DB_server","localhost");

    define("DB_username","root");

    define("DB_password","");

    define("DB_name","song_lyrics_exam");

    
    $connect=mysqli_connect(DB_server,DB_username,DB_password, DB_name);


    if($connect === false){
        die("Connection was not established due to: ". mysqli_connect_error());
    }
?>