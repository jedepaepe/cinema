<?php
if (isset($_GET["titre"])) {
    $titre = "%" . $_GET["titre"] . "%";
    $index = 1;
    $len = 2;
    $sql = "SELECT * from film WHERE titre LIKE '$titre' LIMIT $index,$len";
} else {
    $sql = "SELECT * from film";
}
$porteMysql = new PDO('mysql:host=localhost;dbname=cinema;chartset=utf8', 'root', '');
$titreFilm = $porteMysql->query($sql);
$allFilm = $titreFilm->fetchAll();
?>
<?php
echo'<table border= 3 cellspacing = 1 cellpading = 1 width =100%>';
echo'<tr>';
echo'<td width = 7 >ID';
echo'<td width = 50 >TITRE';
echo'<td width = 7>ANNEE';
echo'<td width = 200>Description';
echo'<td width = 30>OPTIONS';
echo'</tr>';
echo'<tr>';
$i = 0;
while ($i < sizeof($allFilm)) {
    echo'<td>' . $allFilm [$i][0] . '</td>';
    echo'<td>' . $allFilm [$i][1] . '</td>';
    echo'<td>' . $allFilm [$i][2] . '</td>';
    echo'<td>' . utf8_encode($allFilm [$i][3]) . '</td>';
    echo'<td><input name="update" type="image" value=".$allFilm [$i][0]."  src="images/update.png" width ="50" height="50" onclick="page.php" >
    .<input name="delete" type="image" value=".$allFilm [$i][0]."  src="images/p11oubelle.png" width ="50" height="50" onclick="page.php" ></td>';
    echo'</tr>';
    $i++;
}
echo'</table>';
?> 