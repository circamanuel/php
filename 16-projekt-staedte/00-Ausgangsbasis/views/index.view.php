<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/simple.css">
</head>
<body>
    <h1> Steadte Verzeichniss</h1>
    <p>hier finden sie alle steade Deutschlands</p>
    <nav>
    <?php foreach ($alphabet AS $char); ?>
        <href="index.php?<?php http_build_query(['char' => $char]); ?>
        <?php  e($char); ?>

    </nav>
</head>
</body>
</html>
