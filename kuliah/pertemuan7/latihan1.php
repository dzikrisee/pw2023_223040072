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
        ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>
                &foto=<?= $mhs["foto"]; ?>&email=<?= $mhs["email"]; ?>">
                
                <?= $mhs["nama"]; ?></a>

            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>