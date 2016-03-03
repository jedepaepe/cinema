<?php
$porteMysql = new PDO('mysql:host=localhost;dbname=cinema;chartset=utf8', 'root', '');
$titreFilm = $porteMysql->query("SELECT* from film");
$allFilm = $titreFilm->fetchAll();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>films</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>

    <body>
        <div>
            <input type="search" name="search" placeholder="search">
            <button id="search">Submit</button>
        </div>
        <div id="result">
            
        </div>

        <?php include './footer.php'; ?>

        <script>
            $("#search").click(function() {
                $.ajax({url: "search_result.php",
                    success: function(result) {
                        $("#result").html(result);
                    },
                    error: function() {
                        $("#result").html("ERROR");
                    }
                });
            });


        </script>
    </body> 
</html>
