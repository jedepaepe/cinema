<?php
class DataBase {
    private $pdo; // la connection avec la DB
    
    function __construct($name) {
        $this->pdo = new PDO("mysql:host=localhost;dbname=cinema;chartset=utf8", 'root', '');
    }
    
    public function query($query) {
        $pdoStatement = $this->pdo->query($query);
        return $pdoStatement->fetchAll();
//        return $pdoStatement->fetch(PDO::FETCH_OBJ);
    }   
}
echo "test <br><br>";
$database = new DataBase("cinema");
$test = 5;

