<?php
include_once './DataBase.php';
$fourFilm = $database->query("SELECT titre, description FROM film ORDER BY id DESC LIMIT 4");
var_dump($fourFilm);
echo "<hr>";
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include_once './head.php'; ?>
        <title>Films</title>
    </head>
    <body>
        <?php include './header.php'; ?>
        <aside class="container">
            <form role="form">
                <input type="search" class="form-control" id="search" placeholder="rechercher">
            </form>
        </aside>
    <main class="container">
        <div class="row">
            <?php for ($i = 0; $i < sizeof($fourFilm); $i++) { ?>
                <section class="col-xs-12 col-sm-6">
                    <div class="media">
                        <img src="http://www.findingberlin.com/wp-content/uploads/Poster_Victoria.jpg" class="FilmImg pull-left">
                        <div class="media-body">
                            <h4 class="media-heading"> <?php echo $fourFilm[$i][0] ?></h4>
                            <p> <?php echo utf8_encode($fourFilm[$i][1]) ?> </p>
                        </div>
                    </div>
                </section>
            <?php } ?>
        </div>
    </main>
    <?php include './footer.php'; ?>
</html>


