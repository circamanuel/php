<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=php_cities', 'php_cities', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo 'Verbindung hergestellt.';
}
catch(PDOException $e) {
    echo 'Probleme mit der Datenbankverbindung...';
    die();
}
var_dump($pdo);
