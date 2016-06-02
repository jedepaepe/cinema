<?php

interface  IDB {
    public function query($qurey);
}

// DAO layer (Database Access Object = couche d'accès à la DB)
class DataBase implements IDB {
    private $pdo; // la connection avec la DB
    
    function __construct($name) {
        $this->pdo = new PDO("mysql:host=localhost;dbname=$name;chartset=utf8", 'root', '');
    }
    
    public function query($query) {
        $pdoStatement = $this->pdo->query($query);
        return $pdoStatement->fetchAll();
//        return $pdoStatement->fetch(PDO::FETCH_OBJ);
    }   
}

// simulateur d'accès à la DB
class StubDB implements IDB {
    public function query($query) {
        return array(
            array(1, "Les dents de la mer", "1978", "Blablabla 1"),
            array(2, "Les gendarmes à st trop", "1965", "Il faut beau "),
            array(3, "Toto ce héro", "1985", "Un film belge")
            );
    }
}

//
// Class métier
//
interface ICinema {
    function getAllFilms();
}

class Cinema implements ICinema {
    private $database;
    
    function __construct() {
        $this->database = new DataBase("cinema");
        //$database = new StubDB();
    }
    
    function getAllFilms() {
        return $this->database->query("SELECT * FROM film ORDER BY id DESC LIMIT 4");
    }
}

class StubCinema implements ICinema {
       
    public function getAllFilms() {
        return array(
            array(1, "Les dents de la mer", "1978", "Blablabla 1"),
            array(2, "Les gendarmes à st trop", "1965", "Il faut beau "),
            array(3, "Toto ce héro", "1985", "Un film belge")
            );        
    }
}

$cinema = new StubCinema();

