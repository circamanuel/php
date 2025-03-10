<?php
try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=php_course;charset=utf8mb4", "phpadmin", "");
    echo "✅ PDO-Verbindung erfolgreich!";
} catch (PDOException $e) {
    echo "❌ PDO ERROR: " . $e->getMessage();
}
?>

