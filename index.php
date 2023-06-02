<?php
global $conn;
require "dbconnect.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Веб-приложение гр. 604-21з</h1>

    <?php
        echo "<h2>Список психологов и цена за консультацию (1 час)</h2>";

        $result = $conn->query("SELECT * FROM psychologist");

    while ($row = $result->fetch()){
        ?>
        <div class="item">
            <div class="name">
                <?=$row['Name']?>
            </div>
            <div class="price">
                <?=$row['consultation_price']?>
            </div>

        </div>


        <?php

    }
    ?>

</body>
</html>