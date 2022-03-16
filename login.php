<?php

include("includes/PHPFile/Account.php");

session_start();

$error = printError();

$_SESSION['naam'] = '';
$wachtwoord = '';
$wachtwoordcheck = '';
$email = '';

if (isset($_POST['loginsubmit'])) {
    $_SESSION['naam'] = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord'];
    $email = $_POST['email'];
    login($_SESSION['naam'], $wachtwoord, $email);
}

if (isset($_POST['signupsubmit'])) {
    $_SESSION['naam'] = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord'];
    $wachtwoord = $_POST['wachtwoordcheck'];
    $email = $_POST['email'];
    makeAccount($_SESSION['naam'], $wachtwoord, $wachtwoordcheck, $email);
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
<div class="backbuttonplace">
    <a href="index.php"><button class="">back</button></a>
</div>
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
        <div class="login_block">
            <div class="text_place center">
                <h2 class="fontcontact"> Signup </h2>
            </div>
            <form action="" method="post">
                <div class="signup_input_plek center">
                    <input class="clearforms style_input" type="text" placeholder="Naam" name="naam">
                </div>
                <div class="signup_input_plek center">
                    <input class="clearforms style_input" type="email" placeholder="Email" name="email">
                </div>
                <div class="signup_input_plek center">
                    <input class="clearforms style_input" type="password" placeholder="Password" name="wachtwoord">
                </div>
                <div class="signup_input_plek center">
                    <input class="clearforms style_input" type="password" placeholder="Password" name="wachtwoordcheck">
                </div>
                <div class="login_error_plek">
                    <p> <?php echo $error ?> </p>
                </div>
                <div class="signup_input_plek center">
                    <input class="clearforms style_input" type="submit" name="signupsubmit">
                </div>
            </form>
        </div>
    </div>
</main>
</body>
</html>
