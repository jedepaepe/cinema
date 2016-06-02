<?php
include_once './DataBase.php';
$fourFilm = $cinema->getAllFilms();
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
                            <h4 class="media-heading"> <?php echo $fourFilm[$i][1] ?></h4>
                            <p> <?php echo utf8_encode($fourFilm[$i][3]) ?> </p>
                        </div>
                    </div>
                </section>
            <?php if($i%2 == 1 && $i != sizeof($fourFilm)-1 ) { ?>
        </div>    
        <div class="row">
            <?php } } ?>
        </div>
    </main>
    <?php include './footer.php'; ?>
</html>


