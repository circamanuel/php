<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=php_course;charset=utf8mb4", "phpadmin", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Fehler als Exception werfen
    ]);

} catch (PDOException$e) {
    // var_dump(($e->getMessage()));
    echo 'Probleme mit der Datenbank verbindung...';
    die();
}

/*
$stmt = $pdo->prepare(('UPDATE `news` SET `title` = :title WHERE `id` = :id'));
$stmt->bindValue(':id', 7);
$stmt->bindValue(':title', 'Hallo Jupiter');
$stmt->execute();

var_dump($pdo->lastInsertId());
*/

$stmt = $pdo->prepare('DELETE FROM `news` WHERE `id` = :id');
$stmt->bindValue(':id', 7);
$stmt->execute();