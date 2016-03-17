<html>
    <head>
        <meta charset="UTF-8">
        <title>films</title>
        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body> 
        <?php include './header.php'; ?>
        <input id="titre" type="search" name="titre" placeholder="titre" 
               onkeyup="search(value)" onsearch="search(value)">
        <div id="result"></div>
    </body>
    <?php include './footer.php'; ?>
    <script>
        var page = 99;
        function search(value) {
            /*if(arguments.length == 0) {
                var value = $("#titre").val();
            } else {
                value = arguments[0];
            }*/
            if(value === undefined) {
                var value = $("#titre").val();
            }
            $.ajax(
                    {
                        url: "search_result.php?titre=" + value,
                        success: function(result) {
                            $("#result").html(result);
                        },
                        error: function() { 
                            $("#result").html("<h1 style='color: red'>ERROR</h1>");
                        }
                    }
            );
        };
        search();
        $( "#titre" ).focus();
    </script>
</html>