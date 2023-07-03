<?php
if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="./snack2.php" method="GET">
            <input type="text" name="name" placeholder="name">
            <input type="mail" name="mail" placeholder="mail">
            <input type="text" name="age" placeholder="age">
            <button type="submit">Accedi</button>
        </form>
        <!-- controllo che il nome contenga più di 3 caratteri, che la mail contena '@' e '.' e che l'età sia un numero -->
        <?php if ( strlen($name) > 3 && str_contains($mail, '.') && str_contains($mail, '@') && is_numeric($age)) {?>
            <p><strong>Accesso Riuscito!</strong></p>
        <?php } else {?>
            <p><strong>Accesso Negato!</strong></p>
        <?php }?>
    </body>
</html>