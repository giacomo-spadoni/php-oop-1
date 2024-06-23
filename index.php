<?php
include './Models/store.php';

$matrix = new Movie('Matrix', 'Science fiction', 1999, 1);
// $matrix->title = 'Matrix';
// $matrix->genre = 'Science fiction';
// $matrix->yearRelease = 1999;
// $matrix->nSerie = 1;
// $matrix->serie($matrix->nSerie);


$matrix2 = new Movie('Matrix Reloaded', 'Science fiction', 2003, 2);
// $matrix2->title = 'Matrix Reloaded';
// $matrix2->genre = 'Science fiction';
// $matrix2->yearRelease = 2003;
// $matrix2->nSerie = 2;
// $matrix2->serie($matrix2->nSerie);

$matrix3 = new Movie('Matrix Revolutions', 'Science fiction', 2003, 3);
// $matrix3->title = 'Matrix Revolutions';
// $matrix3->genre = 'Science fiction';
// $matrix3->yearRelease = 2003;
// $matrix3->nSerie = 3;
// $matrix3->serie($matrix3->nSerie);

$movies = [$matrix, $matrix2, $matrix3];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies
    </title>
</head>

<body>
    <div style="display: flex; gap: 1rem;">
        <?php foreach ($movies as $movie) : ?>
            <div>
                <div>Titolo: <?= $movie->title ?></div>
                <div>Genere: <?= $movie->genre ?></div>
                <div><?= $movie->series ?></div>
                <div>Anno di uscita: <?= $movie->yearRelease ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>