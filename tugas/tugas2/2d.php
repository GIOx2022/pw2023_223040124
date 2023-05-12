<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d.php</title>
    <style>
        .box {
        width: 48px;
        height: 48px;
        display: inline-block;
        border: 1px solid black;
        }

        .black {
        background-color: black;
        }

        .white {
        background-color: white;
        }
    </style>

</head>
<body>
    
    <?php
    for ($i = 1; $i <= 5; $i++) {
    echo "<div style='display: flex;'>";
    for ($j = 1; $j <= 5; $j++) {
    $total = $i + $j;
    if ($total % 2 == 0) {
    echo "<div class='box white'></div>";
    } else {
    echo "<div class='box black'></div>";
    }
    }
    echo "</div>";
    }
    ?>

</body>
</html>