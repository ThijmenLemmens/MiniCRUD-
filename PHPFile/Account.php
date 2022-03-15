<?php

$conn = new PDO("mysql:host=localhost;dbname=pizza", 'root', '');

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "PDO works";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$error = '';

function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

function makeAccount($naam, $wachtwoord ,$email) {
    global $conn, $error;
    $get = "SELECT * FROM accounts where email= '".$email."'";
    $result = $conn->prepare($get);
    $result->execute();
    if ($result->rowCount() >= 1) {
        $error = "account bestaat al!";
    } else {
        $sql = "INSERT INTO accounts (naam, wachtwoord, email) VALUES ('$naam', '$wachtwoord', '$email')";
        $result = $conn->prepare($sql);
        $result->execute();
    }
}

function login($naam ,$wachtwoord, $email) {
    global $conn, $error;
    if (empty($wachtwoord) || empty($email) || empty($naam)) {
        $error = "je moet alles invullen!";
    } else {
        $get = "SELECT * FROM accounts where naam = '$naam' AND wachtwoord = '$wachtwoord' AND email = '$email'";
        $result = $conn->prepare($get);
        $result->execute();
        if ($result->rowCount() == 1) {
            redirect("menubackend.php");
            $error = "logged in!";
        } else {
            $error = "account bestaat niet!";
        }
    }
}

function printError(): string {
    global $error;
    return $error;
}

