<html>
    <head>
        <meta charset="UTF-8">
        <title>films</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body> 
        <?php include './header.php'; ?>
        <input id="titre" type="search" name="titre" placeholder="titre">
        <input id="search" type="submit">
        <div id="result"></div>
    </body>
    <?php include './footer.php'; ?>
    <script>
        $("#search").click(function() {
            var value = $("#titre").val();
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
        });
    </script>
</html>