<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
    <?php
    $db = new mysqli('localhost', 'root', '', 'cms');
    $db->set_charset('utf8');
    $sql = "SELECT * FROM posts ORDER BY timestamp DESC LIMIT 10";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()){
        $title = $row['title'];
        $img = $row['img'];
        $author = $row['author'];
        $timestamp = $row['timestamp'];

        echo '
        <div class="row my-5">
        <article class="col-sm-10 offset-sm1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
            <h1>'.$title.'</h1>
            <img src="'.$img.'" class="img-fluid"alt="lorem">
            <footer class="text-end">'.$author.', dnia '.$timestamp.'</footer>
        </article>
        </div>
        ';
    }
    $db->close();
    ?>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>