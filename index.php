<?php

echo ("This is the index file!") . PHP_EOL;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page!</title>
</head>
<body>
    <h1>Multiplication table of 3:</h1>

    <dl>
        <?php for($i = 1; $i<11; $i++) { ?>
        <dt><h3> <?php $res = $i*3; echo("3 x $i = $res"); ?>;</h3></dt>
        <?php } ?>
    </dl>
</body>
</html>