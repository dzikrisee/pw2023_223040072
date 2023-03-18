<?php 
    $daftarFilm = [
        [
            'poster' => 'antman.jpg',
            'Judul' => 'The Antman',
            'Tahun' => '2015',
            'Genre' => 'Action',
            'Pemeran Utama' => ['Paul Rudd', 'Michael Douglas', 'Evangeline Lilly'],
            'Sutradara' => 'Peyton Reed'
        ],
        [
            'poster' => 'hawkey.jpg',
            'Judul' => 'Hawkey',
            'Tahun' => '2015',
            'Genre' => 'Action',
            'Pemeran Utama' => ['Paul Rudd, ', 'Michael Douglas', 'Evangeline Lilly'],
            'Sutradara' => 'Peyton Reed'
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <?php foreach($daftarFilm as $i) { ?>
    <ul>
        <li>
            <img src="img/<?= $i['poster']; ?>" width ="100">
        </li>
        <li>Judul : <?= $i['Judul']; ?></li>
        <li>Tahun : <?= $i['Tahun']; ?></li>
        <li>Genre : <?= $i['Genre']; ?></li>
        <li>Pemeran Utama : </li>
        <?php foreach($i['Pemeran Utama'] as $p ) {
            echo $p;
        }; ?>
        <li>Sutradara : <?= $i['Sutradara']; ?></li>
    </ul>
        <?php } ?>

</body>
</html>