<?php

    include __DIR__. './function.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">
    </head>
    <body>
        <div class="container-fluid h-100vh d-flex flex-column align-items-center justify-content-center">
            <div class="row">
                <div class="col">
                    <form action="./index.php" method="GET" class="form-container">
                        <input type="number" name="numeroPassword">
                        <button type="submit">Invia</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-container">
                        <h1><?php echo getPassword($characters, $passLength)?></h1>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>