<?php

use PHPMailer\PHPMailer\PHPClasse\Mail;

include("includes/PHPClasse/Mail.php");

$conn = new PDO("mysql:host=localhost;dbname=pizza", 'root', '');

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$mail = new Mail();

$error = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mensen = $_POST['mensen'];
    $text = $_POST['text'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    if ($name == '' || $email == '' || $mensen == '') {
        $error = 'Vul alle velden in!';
    } else {
        if (is_numeric($mensen)) {
            if ($mensen > 20 || $mensen <= 0 ) {
                $error = "Max 20 man!";
            } else {
                $error = "Reservering geplaats";
                $sql = "INSERT INTO reserveren (email, naam, opmerking, mensen, date, time) VALUES ('$email', '$name', '$text', '$mensen', '$date', '$time')";
                $conn->exec($sql);
                $mail->send_mail($email, "Reservering", "U hebt een reservering gemaakt voor ". $mensen .", op de naam van ". $name
                    ,"Reservering", $name);
            }
        } else {
            $error = 'Mensen moeten als nummer!';
        }
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
    <link rel="stylesheet" href="css/styles.css">
    <title>Reserveren</title>
</head>
<body>
    <main class="achtergrondreserveren">
        <?php include("includes/PHPFile/header.php") ?>
        <div class="textplacecontact center">
            <h2 class="maintext fontsize30">Reserveren</h2>
        </div>
        <div class="center">
            <div class="formplek">
                <form action="" method="post">
                    <div class="emailplace">
                        <input class="emailveld fontsize24 clearforms borderbotemcontact" type="text" placeholder="Name" name="name">
                    </div>
                    <div class="emailplace">
                        <input class="emailveld fontsize24 clearforms borderbotemcontact" type="email" placeholder="Email" name="email">
                    </div>
                    <div class="emailplace">
                        <input class="emailveld fontsize24 clearforms borderbotemcontact" type="text" placeholder="Mensen" name="mensen">
                    </div>
                    <div class="center textreserveren">
                        <textarea class="textveldreserveren fontcontact clearforms submitbutton" name="text" placeholder="Type hier uw opmerking!"></textarea>
                    </div>
                    <div class="emailplacereserveren spacearound">
                        <input class="clearforms submitbutton" type="date" name="date">
                        <input class="clearforms submitbutton" type="time" name="time">
                    </div>
                    <div class="emailplace">
                        <p class="fontcontact"> <?php echo $error?> </p>
                    </div>
                    <div class="emailplace">
                        <input class="submitveld clearforms submitbutton" type="submit" name="submit" value="Verzend">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
