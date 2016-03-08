<?php
//$porteMysql = new PDO('mysql:host=localhost;dbname=cinema;chartset=utf8', 'root', '');
//$titreFilm = $porteMysql->query("SELECT* from film");
//$allFilm = $titreFilm->fetchAll();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>films</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    
    <body>
        <div>
            <input id="input" type="search" name="search" placeholder="search" onkeyup="ajaxSearch()">
            <button id="search" onclick="ajaxSearch()">Submit</button>
        </div>
        <div id="result">          
            
        </div>

        <?php include './footer.php'; ?>

        <script>
            var URL = "search_result.php";
            function ajaxSearch(){
                $.ajax({
                    "type":"post",
                    "url": URL,
                    "data": {"search":$("#input").val()},
                    "success": function(result) {
                        $("#result").html(result);
                        },
                    "error": function() {
                        $("#result").html("error");
                        }
                });
            }
//            $(document).ready(function(){ajaxSearch();});
            $(function(){ajaxSearch();});
        </script>
    </body> 
</html>
