<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c.php</title>
    <style>
        .box {
            width: 48px;
            height: 48px;
            background-color:salmon;
            border: 1px solid black;
            align-items: center;
            display: inline-flex;
            justify-content: center;
        }
</style>
</head>

<body>
    <?php
        for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
        echo "<div class='box'> $j</div>";
        }
        echo "<br/>";
        }
    ?>
    
</body>

</html>