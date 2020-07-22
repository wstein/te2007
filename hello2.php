<?php
$name = "Peter";
$age = 19;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hello <?= $name ?>!</title>
</head>

<body>
    <p>Hello <?= $name ?>!</p>
    <? if ($age > 18): ?>
    <p><b><?= $name ?> is already 18!</b></p>
    <? endif ?>

</body>

</html>