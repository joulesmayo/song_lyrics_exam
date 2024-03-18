<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Simple CRUD using PHP
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="styles.css">

</head>

<body>
    
    <section class="section1">
        <div class="header">
            <h1 class="text-center pt-5 pb-3">
                SIMPLE CRUD Application using PHP
            </h1>
        </div>

        <div class="container pt-5">
            <form action="addsong.php" method="post">
                <!--Fields-->
                <div class="row">
                    <div class="form-group col-lg-6 col-md-12 col-md-12">
                        <!--TITLE-->
                        <label for="title">Title: </label>
                        <input type="text" id="title" class="form-control" name="title" required>
                    </div>

                    <div class="form-group col-lg-6 col-md-12 col-md-12">
                        <!--ARTIST-->
                        <label for="artist">Artist: </label>
                        <input type="text" id="artist" class="form-control" name="artist" required>
                    </div>
                </div>

                <div class="form-group text-center pt-3">
                        <!--LYRICS-->
                        <label class="mx-auto" for="lyrics">Lyrics: </label>
                        <textarea class="form-control text_lyrics" id="lyrics" id="lyrics" rows="5" cols="60" name="lyrics" required> </textarea>
                </div>

                <div class="form-group text-center pt-3">

                    <input type="submit" id="submit" value="submit" name="submit" class="submit-btn">
                </div>
            
            </form>
        </div>

        <div class="container">
            <table class="table" width='80%' border=1>
                <tr>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Date Created</th>
                    <th>Action</th>
                <?php
                include_once("connection.php");
                $result = mysqli_query($connect, "SELECT * FROM table_song ORDER BY id DESC");
                while($song = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$song['title']."</td>";
                    echo "<td>".$song['artist']."</td>";
                    echo "<td>".$song['date_created']."</td>";
                    echo "<td><a href='edit.php?id=".$song['id']."'>Edit</a> | <a href='delete.php?id=".$song['id']."'>Delete</a></td>";
                }
                ?>
            </table>
        </div>
    </section>
</body>