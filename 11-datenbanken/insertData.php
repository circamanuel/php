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

$stmt = $pdo->prepare('INSERT INTO `news` (`title`, `content`) VALUES (:title, :content)');
$stmt->bindValue(':title', 'Hallo Venus');
$stmt->bindValue(':content', 'Das hier ist der Inhalt dieser Nachricht..');
$stmt->execute();

var_dump($pdo->lastInsertId());