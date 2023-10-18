<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan dengan for </br>";
    for($i = 2; $i<=10; $i+=2){
        echo "$i </br>";
    }

    echo "Perulangan dengan while </br>";
    $i = 1;
    while($i<=10){
        echo "$i </br>";
        $i+=2;
    }
    echo "Perulangan dengan do while </br>";
    $x=1;
    
    function prima($y) {
        if ($y <= 1) {
            return false;
        }else if($y=2){
                return true;
            }
    
        $i = 2;
        do {
            
            if ($y % $i == 0) {
                return false;
            }
            $i++;
        } while (($i * $i) <= $y);
    
        return true;
    }
    
    
    do {
        
         if(prima($x)){
            echo " $x <br>";
         }   
        $x++;
      } while ($x <= 100);

    ?>
</body>
</html>