<?php

function connect_to_dabasse(){
$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'BaseTest01' ;


try {
    $pdo = new PDO ("mysql:host=$servername;dbname=$databasename", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected Successfully" ;

    return $pdo ;
}

catch (PDOException $e) {
echo "connexion failed:". $e->getMessage();

}
}
$pdo=connect_to_dabasse();

$users = $pdo->query("INSERT INTO `Produit` (`Id`, `Name`, `Description`, `Price`, `Quantité`) VALUES ('8', 'T-shirt noir' , 'T-shirt coton de couleur noire', '15.50', '10')");


