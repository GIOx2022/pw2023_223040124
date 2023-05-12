<?php

//array associative
//array yg indexnya adalah string yg kita buat sendiri

$mahasiswa = [
    [
        'nama' => 'Sandhika', 
        'makanan' => ['🍜', '🌭'], 
        'peliharaan' => '🐶'
    ],
    
    [
        'nama' => 'Galih', 
        'makanan' => ['🍔'], 
        'peliharaan' => '🐰'
    ],
    
    [
        'nama' => 'Dodi', 
        'makanan' => [], 
        'peliharaan' => '🐵'
    ],
    
    [
        'nama' => 'Erik', 
        'makanan' => ['🍗', '🍔', '🍜'], 
        'peliharaan' => '🐨'
    ],
    
    [
        'nama' => 'Fajar', 
        'makanan' => ['🥩', '🍗'], 
        'peliharaan' => '🐮'
    ],
    
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $i => $mhs) { ?>
    <ul>
        <li>Nama: <?= $mhs['nama']; ?></li>
        <li>Makanan Favorit: 
            <?php foreach ($mhs['makanan'] as $m) {
                echo $m;
            } ?>   
        </li>
        <li>Peliharaan: <?= $mhs['peliharaan']; ?></li>
    </ul>
    <?php } ?>
</body>
</html>