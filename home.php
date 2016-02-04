<?php
$porteMysql = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '');
$reponse = $porteMysql->query("SELECT titre, description FROM film");
$vecteur = $reponse->fetchAll();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Films</title>
        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div>
            <form method="get" action="http://www.google.com">
                <input type="text" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
            </form>
        </div>
    <main class="TwoColumns">
        <section>
            <div>
                <img src="http://www.findingberlin.com/wp-content/uploads/Poster_Victoria.jpg">
            </div>
            <div>
                <h1>echo $vecteur[0][0]</h1>
                <p>Have you seen Victoria yet? I will not tell you anything about the plot. It’s better if you don’t know anything – because this gigantically delirious idea of a movie can’t be told. It has to seen as a full composition of filmmaking and storyline.
                    One night, one cut, one incredible German movie. In fact: one incredible Berlin movie. If you can manage to forget about the impressive camera, production and direction work of this outstanding movie, you will find the plot to be as “contemporary Berlin” as can be. And the best thing is: no epic Berlin shots and clichés were abused to establish this perception. Instead, Berlin – the spirit of the city, the heart of the city, the wildness of the city – is hidden in subtle details, the dynamics between the characters, the little twists and turns the movie makes, in the dialogue with the cab driver, in the way those “richtige Berliner” walk, how nothing is overtly romantic and yet extremely hypnotic.
                    Favorite quote: YOU TOUCH MY ASS – SAY SORRY WITH THE HEART!
                    Sebastian Schipper, director of the movie, really did something great here. Apart from portraying Berlin very accurately, he was also brave enough to make a German movie that did not stick to the facts. The courage to be a lunatic gangster motherfucker has been definitely lacking so far. And oh, hardly anybody mentions this, but: that Nils Frahm soundtrack is the BOMB.</p>
            </div>
        </section>
        <section>
            <div>
                <img src="http://www.findingberlin.com/wp-content/uploads/Poster_Victoria.jpg">
            </div>
            <div>
                <h1>Maria</h1>
                <p>Have you seen Victoria yet? I will not tell you anything about the plot. It’s better if you don’t know anything – because this gigantically delirious idea of a movie can’t be told. It has to seen as a full composition of filmmaking and storyline.
                    One night, one cut, one incredible German movie. In fact: one incredible Berlin movie. If you can manage to forget about the impressive camera, production and direction work of this outstanding movie, you will find the plot to be as “contemporary Berlin” as can be. And the best thing is: no epic Berlin shots and clichés were abused to establish this perception. Instead, Berlin – the spirit of the city, the heart of the city, the wildness of the city – is hidden in subtle details, the dynamics between the characters, the little twists and turns the movie makes, in the dialogue with the cab driver, in the way those “richtige Berliner” walk, how nothing is overtly romantic and yet extremely hypnotic.
                    Favorite quote: YOU TOUCH MY ASS – SAY SORRY WITH THE HEART!
                    Sebastian Schipper, director of the movie, really did something great here. Apart from portraying Berlin very accurately, he was also brave enough to make a German movie that did not stick to the facts. The courage to be a lunatic gangster motherfucker has been definitely lacking so far. And oh, hardly anybody mentions this, but: that Nils Frahm soundtrack is the BOMB.</p>
            </div>
        </section>
        <section>
            <div>
                <img src="http://www.findingberlin.com/wp-content/uploads/Poster_Victoria.jpg">
            </div>
            <div>
                <h1>Helena</h1>
                <p>Have you seen Victoria yet? I will not tell you anything about the plot. It’s better if you don’t know anything – because this gigantically delirious idea of a movie can’t be told. It has to seen as a full composition of filmmaking and storyline.
                    One night, one cut, one incredible German movie. In fact: one incredible Berlin movie. If you can manage to forget about the impressive camera, production and direction work of this outstanding movie, you will find the plot to be as “contemporary Berlin” as can be. And the best thing is: no epic Berlin shots and clichés were abused to establish this perception. Instead, Berlin – the spirit of the city, the heart of the city, the wildness of the city – is hidden in subtle details, the dynamics between the characters, the little twists and turns the movie makes, in the dialogue with the cab driver, in the way those “richtige Berliner” walk, how nothing is overtly romantic and yet extremely hypnotic.
                    Favorite quote: YOU TOUCH MY ASS – SAY SORRY WITH THE HEART!
                    Sebastian Schipper, director of the movie, really did something great here. Apart from portraying Berlin very accurately, he was also brave enough to make a German movie that did not stick to the facts. The courage to be a lunatic gangster motherfucker has been definitely lacking so far. And oh, hardly anybody mentions this, but: that Nils Frahm soundtrack is the BOMB.</p>
            </div>
        </section>
    </main>
    <?php include './footer.php'; ?>
</body>
</html>


