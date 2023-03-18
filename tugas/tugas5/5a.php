<?php 
$mahasiswa = [
    [   // mahasiswa 1
        'nama' => 'Dzikri Setiawan',
        'nrp' => '223040072',
        'email' => 'Dzikri.223040072@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'dzikri.jpg'
    ],
    [   // mahasiswa 2
        'nama' => 'Moch Zuhdi Maulana Nabilah',
        'nrp' => '223040101',
        'email' => 'Zuhdi.223040101@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'zuhdi.jpg'
    ],
    [   // mahasiswa 3
        'nama' => 'Rivaldy Novyan Dwi Putra',
        'nrp' => '223040110',
        'email' => 'Rivaldy.223040110@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'valdy.jpg'
    ],
    [   // mahasiswa 4
        'nama' => 'Muhammad Daffa Mussyaffa',
        'nrp' => '223040048',
        'email' => 'Daffa.223040048@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'daffa.jpg'
    ],
    [   // mahasiswa 5
        'nama' => 'Muhammad Daffa Riyadi',
        'nrp' => '223040120',
        'email' => 'Daffa.223040120@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'daffaRb.jpg'
    ],
    [   // mahasiswa 6
        'nama' => 'Muhammad Marsa Nurjaman',
        'nrp' => '223040083',
        'email' => 'Marsa.223040083@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'caca.jpg'
    ],
    [   // mahasiswa 7
        'nama' => 'Kaka Praditha Putra',
        'nrp' => '223040087',
        'email' => 'Kaka.223040087@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'kaka.jpg'
    ],
    [   // mahasiswa 8
        'nama' => 'Muhammad Alfath Septian',
        'nrp' => '223040014',
        'email' => 'Alfath.223040014@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'afat.jpg'
    ],
    [   // mahasiswa 9
        'nama' => 'Fakih Helmi Maulanan',
        'nrp' => '223040056',
        'email' => 'Fakih.223040056@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'fakih.jpg'
    ],
    [   // mahasiswa 10
        'nama' => 'Chandra Ardiansyah',
        'nrp' => '223040160',
        'email' => 'Chandra.223040160@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'chandra.jpg'
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
     <ul>
        <li> <img src="img/<?=$m['foto']; ?>" alt="picture" width=100></li>
        <li>Nama : <?= $m ['nama'] ?> </li>
        <li>NRP : <?= $m ['nrp'] ?> </li>
        <li>Jurusan : <?= $m ['jurusan'] ?> </li>
        <li>E-mail : <?= $m ['email'] ?> </li>
        <br>
     </ul>
    <?php endforeach ?>
</body>
</html>