<html>
<head>
    <title>Edit Song</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
// Include database connection file
include_once("connection.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch user data based on id
    $result = mysqli_query($connect, "SELECT * FROM table_song WHERE id=$id");

    $song = mysqli_fetch_array($result);
}
?>
    <a href="index.php">Back to Homepage</a>
    <br/><br/>

    <form name="form1" method="post" action="editsong.php">
        <table border="0">
            <tr>
                <td>Title</td>
                <td><input type="text" name="title" value="<?php echo $song['title'];?>"></td>
            </tr>
            <tr>
                <td>Artist</td>
                <td><input type="text" name="artist" value="<?php echo $song['artist'];?>"></td>
            </tr>
            <tr>
                <td>Lyrics</td>
                <td><textarea class="form-control text_lyrics" id="lyrics" id="lyrics" rows="5" cols="60" name="lyrics"> <?php echo $song['lyrics'];?></textarea></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>