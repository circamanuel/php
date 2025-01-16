<?php
include 'views/header.php';
include 'inc/names.php';
include 'inc/functions.php';

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
    ?>
    <h3>Namen, die mit <?php echo e($char); ?> beginnen:</h3>
    <ul>
        <?php foreach($filteredNames AS $currenName => $_): ?>
            <li>
                <a href="name.php?<?php echo http_build_query(['name' => $currenName]); ?>">
                    <?php echo $currenName; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php include 'views/footer.php'; ?>