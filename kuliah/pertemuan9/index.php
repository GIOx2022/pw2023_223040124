<?php 
    $students = [
        [
        "nama" => "Gio",
        "npm" => "223040124",
        "email" => "Gio@gmail.com",
        ],
        [
            "nama" => "Han Han",
            "npm" => "223040243",
            "email" => "Gio@gmail.com",
        ],
    ];
    echo $_SERVER["REQUEST_URL"]; 
    require('views/index.view.php');
?>


<div class="container">
    <h1>Halaman Home</h1>

    <h3>Daftar Mahasiswa</h3>
    <?php foreach ($students as $students) : ?>
        <ul>
            <li>Nama: <?=$students["nama"]; ?></li>
            <li>Npm: <?=$students["npm"]; ?></li>
            <li>Email: <?=$students["email"]; ?></li>
        </ul>
        <?php endforeach; ?> 
</div>