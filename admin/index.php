<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php
        var_dump($_REQUEST);
        // $title = $_REQUEST['postTitle'];
        // $image = $_REQUEST['postImage'];
        // $author = $_REQUEST['postAuthor'];
        // $timestamp = time();

        // $sql = "INSERT INTO posts (`id`, `title`, `img`, `author`, `timestamp` ) VALUES (NULL, '$title', '$image', '$author', '$timestamp')";

    ?>
    <div class="container">
        <div class="row">
            <main class="col-lg-8 offset-lg-2">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="postTitle" class="form-label">Tytuł</label>
                        <input type="text" class="form-control" id="postTitle" name="postTitle"/>
                        <div id="titleHelp" class="form-text">Podaj tytuł posta</div>
                    </div>
                    <div class="mb-3">
                        <label for="postImage" class="form-label">Url obrazka</label>
                        <input type="text" class="form-control" id="postImage" name="postImage"/>
                    </div>
                    <div class="mb-3">
                        <label for="postAuthor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="postAuthor" name="postAuthor"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Wyślij</button>
                </form>
            </main>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>