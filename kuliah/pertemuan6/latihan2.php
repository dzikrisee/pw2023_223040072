<?php 
    // array Asosiatif
    // array yang index nya adalah string yang kita buat sendiri
    $mahasiswa = [
        [
            'nama' => 'Dzikri', 
            'binatang' => '🐈', 
            'makanan' => ['🍜', '🍩', '🦐']
        ], 
        [
            'nama' => 'Zuhdi', 
            'binatang' => '🐄', 
            'makanan' => ['🍔', '🥨', '🌮']
        ], 
        [
            'nama' => 'Dicco', 
            'binatang' => '🐦', 
            'makanan' => ['🥪', '🍢', '🍔']
        ], 
        [
            'nama' => 'Adi', 
            'binatang' => '🦆', 
            'makanan' => ['🍩', '🍟', '🍚']
        ], 
        [
            'nama' => 'Didin', 
            'binatang' => '🦬', 
            'makanan' => []
        ]
    ];

    // print_r($mahasiswa);
    // die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $i) { ?>
    <ul>
        <li>Nama : <?= $i['nama']; ?></li>
        <li>Makanan Favorit : </li>
        <?php foreach($i['makanan'] as $m ) {
            echo $m;
        }; ?>
        <li>Binatang Peliharaan : <?= $i['binatang']; ?></li>
    </ul>
    <?php } ?>
</body>
</html>