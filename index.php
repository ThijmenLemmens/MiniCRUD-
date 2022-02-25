<?php ?>
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
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Home</title>
</head>
<body>
    <main class="mainloc">
        <div class="textpizza center">
            <h1 class="maintext"> Pizzeria Da La Thijma</h1>
        </div>
        <div class="center model">
            <model-viewer bounds="tight" src="fotos/pizza.glb" ar ar-modes="webxr scene-viewer quick-look" camera-controls environment-image="neutral" poster="poster.webp" shadow-intensity="0.75">
                <div class="progress-bar hide" slot="progress-bar">
                    <div class="update-bar"></div>
                </div>
            </model-viewer>
        </div>
        <div class="mainpage center_boven">
            <div class="buttonbox">
                <a href="menu.php"><button class="buttonhome">Menu</button></a>
                <a href="reserveren.php"><button class="buttonhome">Reserveren</button></a>
                <a href="contact.php"><button class="buttonhome">Contact</button></a>
            </div>
        </div>
    </main>
    <script src="js/main.js"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</body>
</html>
