<?php
session_start();
$g = json_encode($_SESSION['ram']);
// le json_encode permet de convertire un array en json

$dbh = new PDO('mysql:host=localhost;dbname=puissance_4', 'root', 'root');

$sth = $dbh-> prepare('INSERT INTO `main` ( `joueur_1`, `joueur_2`, `game`) VALUES ( ?, ?, ? )');

$sth -> execute(['teste1', 'teste&',$g]);

header('location: index.php');

