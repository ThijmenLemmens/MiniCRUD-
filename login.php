<?php

include("PHPFile/Account.php");
include("PHPClasse/Mail.php");

session_start();

$error = printError();

$naam = '';
$wachtwoord = '';
$email = '';

if (isset($_POST['loginsubmit'])) {
    $naam = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord'];
    $email = $_POST['email'];
    login($naam, $wachtwoord, $email);
}

//if (isset()) {
//
//}

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
            <div class="text_place center">
                <h2 class="fontcontact"> Login </h2>
            </div>
            <form action="" method="post">
                <div class="login_input_plek center">
                    <input class="clearforms style_input" type="text" placeholder="Naam" name="naam">
                </div>
                <div class="login_input_plek center">
                    <input class="clearforms style_input" type="password" placeholder="Password" name="wachtwoord">
                </div>
                <div class="login_input_plek center">
                    <input class="clearforms style_input" type="email" placeholder="Email" name="email">
                </div>
                <div class="login_error_plek">
                    <p> <?php echo $error ?> </p>
                </div>
                <div class="login_input_plek center">
                    <input class="clearforms style_input" type="submit" name="loginsubmit">
                </div>
            </form>
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
