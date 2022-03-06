<?php

include("PHPClasse/Mail.php");

$mail = new Mail();

$error = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $onderwerp = $_POST['onderwerp'];
    $titel = $_POST['titel'];
    $message = $_POST['text'];
    if ($email == '' || $name == '' || $onderwerp == '' || $titel == '') {
        $error = "Vullen alle velden in!";
    } else {
        $mail->send_mail($email, $titel, $message, $onderwerp, $name);
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Contact</title>
</head>
<body>
    <main class="maincontact">
        <div class="backbuttonplace">
            <a href="index.php"><button class="buttonhome">Back</button></a>
        </div>
        <div class="textplacecontact center">
            <h2 class="maintext fontsize30">Contact</h2>
        </div>
        <div class="contactplek center">
            <div class="formplek">
                <form action="" method="post">
                    <div class="emailplace">
                        <input class="emailveld fontsize24" type="email" placeholder="Email" name="email">
                    </div>
                    <div class="emailplace">
                        <input class="emailveld fontsize24" type="text" placeholder="Name" name="name">
                    </div>
                    <div class="emailplace">
                        <input class="emailveld fontsize24" type="text" placeholder="Onderwerp" name="onderwerp">
                    </div>
                    <div class="emailplace">
                        <input class="emailveld fontsize24" type="text" placeholder="Titel" name="titel">
                    </div>
                    <div class="text">
                        <textarea class="textveld" name="text"></textarea>
                    </div>
                    <div class="errorplek">
                        <p> <?php echo $error?> </p>
                    </div>
                    <div class="emailplace">
                        <input class="submitveld" type="submit" id="submit" value="Verzend" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
