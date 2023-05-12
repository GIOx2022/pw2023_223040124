<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1c.php</title>
  <style>
    .kotak {
        background-color: salmon;
        width: 75px;
        line-height: 75px;
        border: 1px solid black;
        text-align: center;
    }
    .kotak-wrapper {
      display: flex;
    }
  </style>
</head>
<body>
  <div class="kotak">1</div>
  <div class="kotak-wrapper">
    <div class="kotak">2</div>
    <div class="kotak">2</div>
  </div>
  <div class="kotak-wrapper">
    <div class="kotak">3</div>
    <div class="kotak">3</div>
    <div class="kotak">3</div>
  </div>
</body>
</html>