<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./styles/simple.css">
    <link rel="stylesheet" type="text/css" href="./styles/custom.css">
    <title>PHP-Kurs</title>
</head>
<body>
<header>
    <h1>Geburtsstatistiken</h1>
    <p>Hier finden Sie die Geburtsstatistiken</p>
</header>
<?php
include 'inc/names.php';

$firstLetters = [];

foreach ($names AS $nameArray)  {
//    print_r($nameArray);
    $nameFirstLetter = $nameArray['name'][0];

    if(empty($firstLetters[$nameFirstLetter])) {
        $firstLetters[$nameFirstLetter] = true;
    }
}

?>
<nav class="nav">
<?php foreach ($firstLetters AS $firstLetter => $_):?>
  <a
          href="index.php?char=<?php echo $firstLetter; ?>"
          <?php if(!empty($_GET['char']) && $_GET['char'] === $firstLetter): ?>
                class="selected"
          <?php endif; ?>
  ><?php echo $firstLetter; ?></a>
<?php endforeach; ?>
</nav>
<?php  if(!empty($_GET['char'][0]) && is_string($_GET['char'][0])): ?>
    <hr/>
<?php
    $char = $_GET['char'][0];
    $filteredNames = [];

    foreach ($names AS $namesArray) {
        $currentName = $namesArray['name'];
        if ($currentName[0] !== $char) {
            continue;
        }

        if(empty($filteredNames[$currentName])) {
            $filteredNames[$currentName] = true;
        }
    }
    var_dump($filteredNames);
    ?>
<?php endif; ?>

</body>
</html>