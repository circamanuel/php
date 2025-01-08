<!DOCTYPE html>
<html lang="en">
<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./styles/simple.css">

    <?php if(empty($pageTitle)) : ?>
        <title>Reisebuero</title>
    <?php else: ?>
        <title><?php echo $pageTitle; ?></title>
    <?php endif; ?>
    <style>
        a.active{
            background-color: var(--accent);
            border: 1px solid var(--accent);
            color: white!important;
        }
        a.active:hover{
            color:white!important;
            background-color: black;
            border: 1px solid black;
        }
    </style>

</head>
<body>
    <header>
        <h1>Das moderne Reisebüro</h1>

        <nav>
            <a href="./" <?php if(!empty($page) && $page === "index"): ?> class="active"<?php endif;?>>Startseite</a>
            <a href="helsinki.php" <?php if(!empty($page) && $currentPage === "helsinki.php"): ?> class="active"<?php endif;?>>Helsinki</a>
            <a href="mallorca.php" <?php if(!empty($page) && $currentPage === "mallorca.php"): ?> class="active"<?php endif;?>>Mallorca</a>
        </nav>
    </header>

    <main>
        <?php if(!empty($pageTitle)) : ?>
            <h2><?php echo $pageTitle; ?></h2>
        <?php endif; ?>
