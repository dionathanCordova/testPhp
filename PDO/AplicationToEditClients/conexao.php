<?php

$dsn = "mysql:dbname=elvistore;host=localhost";
$dbuser = "root";
$dbpass = "*********";

try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e) {
    echo "Falha: " . $e->getMessage();
}



?>