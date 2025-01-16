<?php
include 'views/header.php';
include 'inc/names.php';
include 'inc/functions.php';

$currentName = $_GET['name'];
$filteredPersonList = [];
//  get all names from list, filter by $currentName.
foreach($names AS $nameArray) {
    if ($nameArray['name'] === $currentName) {
        $filteredPersonList[] = $nameArray;
    }
}
var_dump($filteredPersonList);
?>

<?php //foreach ($filtered[] AS $name => $_): ?>
<!--    --><?php //echo $name; ?>
<?php //endforeach; ?>

<?php

include 'views/footer.php';
?>
