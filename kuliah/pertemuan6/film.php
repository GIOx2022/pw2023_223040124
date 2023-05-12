<?php
$film = [
  [
    'image' => '<img src="./poster/Spider-Man2002Poster.jpg" />',
    'title' => 'Spiderman',
    'year' => '2002',
    'genre' => ['Adventure', 'Action', 'Sci-Fi'],
    'stars' => ['Tobey Maguire', 'Kirsten Dunst', 'Willem Dafoe', 'James Franco'],
    'director' => 'Sam Raimi'
  ],
  [
    'image' => '<img src="./poster/spiderman2.jpg" />',
    'title' => 'Spiderman2',
    'year' => '2004',
    'genre' => ['Adventure', 'Action', 'Sci-Fi'],
    'stars' => ['Tobey Maguire', 'Kirsten Dunst', 'Alfred Molina', 'James Franco'],
    'director' => 'Sam Raimi'
  ],
  [
    'image' => '<img src="./poster/spiderman3.jpg" />',
    'title' => 'Spiderman3',
    'year' => '2007',
    'genre' => ['Adventure', 'Action', 'Sci-Fi'],
    'stars' => [ 'Tobey Maguire', 'Kirsten Dunst', 'Topher Grace', 'Thomas Haden Church'],
    'director' => 'Sam Raimi'
  ],
  [
    'image' => '<img src="./poster/theamazingspiderman.jpg" />',
    'title' => 'The Amazing Spiderman',
    'year' => '2012',
    'genre' => ['Adventure', 'Action', 'Sci-Fi'],
    'stars' => [ 'Andrew Garfield', 'Emma Stone', 'Rhys Ifans', 'Irrfan Khan'],
    'director' => 'Marc Webb'
  ],
  [
    'image' => '<img src="./poster/theamazingspiderman2.jpg" />',
    'title' => 'The Amazing Spiderman 2',
    'year' => '2014',
    'genre' => ['Adventure', 'Action', 'Sci-Fi'],
    'stars' => ['Andrew Garfield', 'Emma Stone', 'Jamie Foxx', 'Paul Giamatti'],
    'director' => 'Marc Webb'
  ],
]; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Spiderman Movie List</h1>
  <?php foreach ($film as $film) { ?>
    <ul>
      <li><?= $film['image'] ?></li>
      <li>Title: <?= $film['title'] ?></li>
      <li>Year: <?= $film['year'] ?></li>
      <li>Genre:
        <?php
        foreach ($film['genre'] as $genre) {
          echo $genre . ', ';
        }
        ?>
      </li>
      <li>Stars:
        <?php
        foreach ($film['stars'] as $stars) {
          echo $stars . ', ';
        }
        ?>
      </li>
      <li>Director: <?= $film['director'] ?></li>
    </ul>
  <?php } ?>
</body>

</html>