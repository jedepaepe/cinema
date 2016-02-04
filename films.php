<?php
$porteMysql = new PDO('mysql:host=localhost;dbname=cinema;chartset=utf8', 'root', '');
$titreFilm = $porteMysql->query("SELECT* from film");
$allFilm = $titreFilm->fetchAll();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Films</title>

    </head>
    <body>

        <?php
        echo'<table border= 3 cellspacing = 1 cellpading = 1 width =100%>';
        echo'<tr>';
        echo'<td width = 7 >ID';
        echo'<td width = 50 >TITRE';
        echo'<td width = 7>ANNEE';
        echo'<td width = 200>description';
        echo'<tr>';
        $i = 0;
        while ($i < sizeof($allFilm)) {
            echo'<td>' . $allFilm [$i][0] . '</td>';
            echo'<td>' . $allFilm [$i][1] . '</td>';
            echo'<td>' . $allFilm [$i][2] . '</td>';
            echo'<td>' . $allFilm [$i][3] . '</td>';

            $i++;
        }
        ?>

       
    </body>
     <?php include './footer.php'; ?>
</html>
