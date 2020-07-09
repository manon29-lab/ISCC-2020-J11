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

$users = $pdo->query("UPDATE Produit SET quantité = 2 WHERE id=4");
?>