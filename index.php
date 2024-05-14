<?php
require_once __DIR__  . "/Models/db.php";
require_once __DIR__  . "/Models/Movie.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Movies</title>
</head>
<body>

<div class="container">
    <h1 class="mt-4 mb-4 text-color">Movie List</h1>
    <div class="row">
        <?php foreach ($movies as $movie) { ?>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-color"><?php echo $movie->title ?></h5>
                        <div class="card-text"><span class="text-color">Director:</span> <?php echo $movie->director ?></div>  
                        <div class="card-text"><span class="text-color">Descrizione:</span> <?php echo $movie->description ?></div>
                        <div class="card-text"><span class="text-color">Genres:</span>
                            <?php 
                            $genres = count($movie->genres);
                            foreach ($movie->genres as $index => $genre) {
                                echo $genre;
                                if ($index < $genres - 1) {
                                    echo ", ";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

    
</body>
</html>