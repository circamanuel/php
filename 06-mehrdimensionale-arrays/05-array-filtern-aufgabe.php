<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./styles/simple.css">
    <title>PHP-Kurs</title>
</head>
<body>
<pre><?php

$arr = [
    ['title' => 'Budapest'],
    ['title' => 'Berlin'],
    ['title' => 'Sofia'],
    ['title' => 'Athen'],
    ['title' => 'Madrid']
];

?></pre>

<?php
// filter for 'B' and create filtered array.
$filtered = [];
foreach ($arr AS $city) {
    if ($city['title'][0] === 'B'){
    $filtered[] = $city;
    }
}
print_r($filtered);
 ?>
<?php if(!empty($filtered)): ?>
    <ul>
        <?php foreach($filtered AS $city): ?>
            <li><?php echo $city['title']; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</html>