<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String manipulation</title>
</head>
<body>
    <?php
    $x="HalloSemua";
    echo "$x </br>";
    echo strtoupper("$x </br>");
    echo strtolower("$x </br>");
    echo substr($x, 0, 5);
    $date = "01-01-2001";
    echo "</br>";
    echo substr($date, 6, 10)


    ?>
</body>
</html>