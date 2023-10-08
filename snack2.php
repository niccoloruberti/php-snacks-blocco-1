<?php
$name = "";
$mail = "";
$age = "";
$accessGranted = false; // Inizializziamo una variabile per verificare l'accesso

if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    
    // Controllo le condizioni per l'accesso
    if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age)) {
        $accessGranted = true; // Impostiamo l'accesso a true se le condizioni sono soddisfatte
    }
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
        <input type="email" name="mail" placeholder="mail">
        <input type="text" name="age" placeholder="age">
        <button type="submit">Accedi</button>
    </form>
    
    <!-- Mostrare il messaggio solo se l'accesso è stato concesso -->
    <?php if ($accessGranted) {?>
        <p><strong>Accesso Riuscito!</strong></p>
    <?php } else if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {?>
        <p><strong>Accesso Negato!</strong></p>
    <?php }?>
</body>
</html>
