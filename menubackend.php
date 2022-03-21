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

echo $naam

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Menu-Backend - Welcome <?php ?></title>
</head>
<body>
    <main>

    </main>
</body>
</html>
