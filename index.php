<?php
include __DIR__ .'/Models/classFunctions.php';
include __DIR__ .'/Models/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Movies</title>
</head>
<body class="bg-secondary-subtle">
   <div class="container mt-5">
                 <h1 class="my-5">Lista film:</h1>
        <div class="row text-white">
            <?php foreach ($movies as $movie) {?>
                <div class="col-3 bg-success border mx-2 shadow-sm p-3 mb-5  rounded" >
                    <h2>Titolo: <?php echo $movie->name; ?></h2>
                    <p>Anno: <?php echo $movie->year; ?></p>
                    <p>Generi: <?php echo implode(', ', $movie->genre); ?></p>
                    <p>Rating: <?php echo $movie->rating; ?></p>
                    <?php if (is_array($movie->network)){ ?>
                        <p>Piattaforme: <?php echo implode(', ', $movie->network); ?></p>
                    <?php } else{ ?>
                        <p>Piattaforma: <?php echo $movie->network; ?></p>
                    <?php }?>
                    <p>Categoria: <?php echo $movie->getOld(); ?></p>
                </div>
       
            <?php }?>
        </div>
   </div>
</body>
</html>