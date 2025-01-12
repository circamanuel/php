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
    <main>

        <?php
         include 'inc/data.php';
         include 'inc/functions.php';

        if (isset($_GET['image'])) {
            $key = $_GET['image'];

            if (array_key_exists($key, $imageTitles)) {
                $title = $imageTitles[$key];
                $text = $imageDescs[$key];

                echo "<h2>$title</h2><br>";
                echo "<p>$text</p>";
                echo "<img src='./images/" . e($key). "' alt='" . e($title) ."'>";

            }
            echo "<a href='index.php'>Back</a>";
        }


        ?>

    </main>
</body>
</html>