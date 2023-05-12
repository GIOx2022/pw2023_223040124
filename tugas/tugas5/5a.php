<?php 

    $mahasiswa = [
        [
            "foto" => "gio-biru.jpg",
            "name" => "Subagiono Prakoso",
            "NRP" => "223040124",
            "Email" => "Gio@gmail.com",
            "jurusan" => "Informatics Engineering"
        ],
        [
            "foto" => "zeus.jpg",
            "name" => "Zeus",
            "NRP" => "01",
            "Email" => "Zeus@gmail.com",
            "jurusan" => "Electrical Engineering"
        ],
        [
            "foto" => "poseidon.jpg",
            "name" => "Poseidon",
            "NRP" => "02",
            "Email" => "Poseidon@gmail.com",
            "jurusan" => "Marine Science"
        ],
        [
            "foto" => "ares.jpg",
            "name" => "Ares",
            "NRP" => "03",
            "Email" => "Ares@gmail.com",
            "jurusan" => "National Defense Science"
        ],
        [
            "foto" => "hephaestus.jpg",
            "name" => "Hephaestus",
            "NRP" => "04",
            "Email" => "Hephaestus@gmail.com",
            "jurusan" => "Metallurgical Engineering"
        ],
        [
            "foto" => "hermes.jpg",
            "name" => "Hermes",
            "NRP" => "05",
            "Email" => "Hermes@gmail.com",
            "jurusan" => "Literature"
        ],
        [
            "foto" => "Hades.jpg",
            "name" => "Hades",
            "NRP" => "06",
            "Email" => "Hades@gmail.com",
            "jurusan" => "Legal Studies"
        ],
        [
            "foto" => "apollo.jpg",
            "name" => "Apollo",
            "NRP" => "07",
            "Email" => "Apollo@gmail.com",
            "jurusan" => "Musical Arts"
        ],
        [
            "foto" => "demeterr.jpg",
            "name" => "Demeter",
            "NRP" => "08",
            "Email" => "Demeter@gmail.com",
            "jurusan" => "Agriculture"
        ],
        [
            "foto" => "hera.jpg",
            "name" => "Hera",
            "NRP" => "09",
            "Email" => "Hera@gmail.com",
            "jurusan" => "Psikologi"
        ],
        [
            "foto" => "athenaa.jpg",
            "name" => "Athena",
            "NRP" => "10",
            "Email" => "Athena@gmail.com",
            "jurusan" => "Education"
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5a.php</title>

    <style>
        img {
            aspect-ration: 1;
            width: 256px;
            object-fit: cover;
        }
    </style>

</head>
<body>
    
<h2>Olympians Student List</h2>

<?php foreach($mahasiswa as $mhs):?>
<ul>
    <li>
        <img src="img/<?= $mhs["foto"]; ?>">
    </li>
    <li>Name : <?= $mhs["name"]; ?></li>
    <li>NRP : <?= $mhs["NRP"]; ?></li>
    <li>Email : <?= $mhs["Email"]; ?></li>
    <li>Major : <?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach;?>

</body>
</html>