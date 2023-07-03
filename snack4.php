<?php

// funzione che genera un array di 15 numeri random
function array15RandomNumbers() {
    $randomNumbers = [];
    while (count($randomNumbers) < 15) {
        $number = rand(1 , 100);
        if (!in_array($number, $randomNumbers)) {
            $randomNumbers[] = $number;
        }
    }
    return $randomNumbers;
}

$randomNumbers = array15RandomNumbers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <!-- ciclo che inserisce i numeri random creati tramite la funzione precedente all'interno di una lista -->
        <?php foreach($randomNumbers as $number) { ?>
            <li><?php echo $number ?></li>
        <?php } ?>
    </ul>
</body>
</html>