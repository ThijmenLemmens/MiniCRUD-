<?php

$conn = new PDO("mysql:host=localhost;dbname=pizza", 'root', '');

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "PDO works";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
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
    <title>Menu</title>
</head>
<body>
    <main class="main_menu">
        <?php include("includes/PHPFile/header.php") ?>
        <div>

        </div>
        <?php
        $query = "SELECT * FROM products ORDER BY productID ASC";
        $result = $conn->prepare($query);
        $result->execute();
        if (!empty($query)) {
            foreach ($result as $key=>$value) {
        ?>
            <div>
                <form action="" method="post">
                    <div></div>
                    <div> <?php echo $result[$key]["product_name"]?> </div>
                    <div></div>
                </form>
            </div>
        <?php
            }
        }
        ?>
        <div>

        </div>
    </main>
</body>
</html>
