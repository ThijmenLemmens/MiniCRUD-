<?php

if (isset($_POST['submit'])) {
    echo $_POST['naam'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <main>
        <form action="" method="post">
            <input type="text" name="naam">
            <input type="submit" name="submit">
        </form>
    </main>
</body>
</html>
