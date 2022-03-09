<?php

include("PHPClasse/Mail.php");

$conn = new mysqli('localhost', 'root', '', 'pizza');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$mail = new Mail();

$error = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mensen = $_POST['mensen'];
    $text = $_POST['text'];
    if ($name == '' || $email == '' || $mensen == '' || $text == '') {
        $error = 'Vul alle velden in!';
    } else {
        if (is_numeric($mensen)) {
//            $query = "INSERT INTO reserveren (email, name, vote) VALUES ('$email', '$password', '0')";
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
    <title>3Reserveren</title>
</head>
<body>
    <main class="achtergrondreserveren">
        <div class="backbuttonplace">
            <a href="index.php"><button class="buttonhome">Back</button></a>
        </div>
        <div class="textplacecontact center">
            <h2 class="maintext fontsize30">Reserveren</h2>
        </div>
        <div class="center">
            <div class="formplek red">
                <form action="" method="post">
                    <div class="">
                        <input type="text" placeholder="Name" name="name">
                    </div>
                    <div class="">
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div class="">
                        <input type="text" placeholder="Mensen" name="mensen">
                    </div>
                    <div class="">
                        <input type="text" placeholder="Type hier uw opmerking!" name="text">
                    </div>
                    <div>
                        <p class="fontcontact"> <?php echo $error?> </p>
                    </div>
                    <div class="">
                        <input type="submit" name="submit" value="Verzend">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
