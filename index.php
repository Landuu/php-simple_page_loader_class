<?php
    require_once 'class/class.pageloader.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PageLoader DEMO</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <header>
        Header <br />
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="index.php?page=o-nas">O Nas</a>
        <a href="index.php?page=oferta">Oferta</a>
        <a href="index.php?page=kontakt">Kontakt</a>
    </nav>

    <main>
        <?php

            PageLoader::load();

        ?>
    </main>
</body>
</html>