<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
<form method="post" action="">
        Input a number: <input type="number" name="angka">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
        $angka = (int)$_POST["angka"];

        echo "Angka = $angka <br>";

        if ($angka > 0) {
            echo "$angka Bil positif";
        } elseif ($angka < 0) {
            echo "$angka Bil negatif";
        } else {
            echo "$angka Bil nol";
        }
    }
    ?>
</body>
</html>