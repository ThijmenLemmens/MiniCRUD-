<?php

session_start();

$naam = $_SESSION['naam'];

function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

if (empty($naam)) {
    redirect("login.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Backend - Welcome <?php echo $naam?> </title>
</head>
<body>
    <main class="main_backend">
        <div>
            <a href="login.php"><button></button></a>
        </div>
        <div class="spacearound">
            <div class="blok_backend">
                <a href="menubackend.php"><button class="button_backend fontsize30">Menu Backend</button></a>
            </div>
            <div class="blok_backend">
                <a href="reserverenbackend.php"><button class="button_backend fontsize30">Reserveren Backend</button></a>
            </div>
            <div class="blok_backend">
                <a href="winkelmandbackend.php"><button class="button_backend fontsize30">Winkelkmand Backend</button></a>
            </div>
        </div>
    </main>
</body>
</html>
