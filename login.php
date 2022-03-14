<?php

include("PHPFile/Account.php");

session_start();

$error = printError();

if (isset($_POST['loginsubmit'])) {
    $name = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord'];
    $email = $_POST['email'];
//    makeAccount($name, $wachtwoord, $email);
    login($name, $wachtwoord, $email);
    echo $error;
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
    <title>Login / Signup</title>
</head>
<body>
    <main class="main_login_signup">
        <div class="login_signup_place center">
            <div class="login_block">

            </div>
        </div>
        <div class="login_signup_place center blauw">
            <div class="">

            </div>
        </div>
    </main>
    <form action="" method="post">
        <input type="text" name="naam">
        <input type="password" name="wachtwoord">
        <input type="email" name="email">
        <input type="submit" name="loginsubmit">
    </form>
</body>
</html>
