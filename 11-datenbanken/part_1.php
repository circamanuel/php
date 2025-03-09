<?php
 try {
    $pdo = new PDO("mysql:host=localhost;dbname=php_course;charset=utf8mb4", "phpadmin", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Fehler als Exception werfen
    ]);

}
    catch (PDOException$e) {
    // var_dump(($e->getMessage()));
        echo 'Probleme mit der Datenbank verbindung...';
        die();
    }

    /*
    $id = (int) $_GET['id'];

    $stmt = $pdo->prepare('SELECT * FROM `news` WHERE `id` = ' . $id);
    var_dump($stmt);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($results);
?>

<ul>
    <?php foreach($results AS $result): ?>
        <li><?php echo $result['title'] ?></li>
    <?php endforeach; ?>
</ul>
*/

$stmt = $pdo->prepare('SELECT * FROM `news` WHERE `id` = :id');
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($result);