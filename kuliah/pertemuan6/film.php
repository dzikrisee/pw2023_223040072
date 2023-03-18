<?php 
    $daftarFilm = [
        [ // no.1
            'poster' => 'antman.jpg',
            'Judul' => 'The Antman',
            'Tahun' => '2015',
            'Genre' => ['Action, ', 'Adventure, ', 'Comedy'],
            'Pemeran Utama' => ['Paul Rudd, ', 'Michael Douglas, ', 'Evangeline Lilly'],
            'Sutradara' => 'Peyton Reed'
        ],
        [ // no.2
            'poster' => 'hawkey.jpg',
            'Judul' => 'Hawkey',
            'Tahun' => '2015',
            'Genre' => ['Action, ', 'Adventure, ', 'Comedy'],
            'Pemeran Utama' => [	
                'Jeremy Renner, ',
                'Hailee Steinfeld, ',
                'Tony Dalton, ',
                'Fra Fee, ',
                'Brian Arcy James'],
            'Sutradara' => 'Jonathan Igla'
        ],      
        [ // no.3
            'poster' => 'thor.jpg',
            'Judul' => 'Thor: Love and Thunder',
            'Tahun' => '2022',
            'Genre' => ['Action, ', 'Adventure, ', 'Comedy'],
            'Pemeran Utama' => ['Chris Hemsworth, ', 'Natalie Portman, ', 'Christian Bale'],
            'Sutradara' => 'Taika Waititi'
        ],
        [ // no.4
            'poster' => 'galaxy.jpg',
            'Judul' => 'Guardians of the Galaxy',
            'Tahun' => '2014',
            'Genre' => ['Action, ', 'Adventure, ', 'Comedy'],
            'Pemeran Utama' => ['Chris Pratt, ', 'Zoe Saldana, ', 'Dave Bautista, ', 'Vin Diesel'],
            'Sutradara' => 'James Gunn'
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
            <img src="img/<?= $i['poster']; ?>" width ="150">
        </li>
        <li>Judul : <?= $i['Judul']; ?></li>
        <li>Tahun : <?= $i['Tahun']; ?></li>
        <li>Genre : </li>
        <?php foreach($i['Genre'] as $g ) {
            echo $g;
        }; ?>
        
        <li>Pemeran Utama : </li>
        <?php foreach($i['Pemeran Utama'] as $p ) {
            echo $p;
        }; ?>
        <li>Sutradara : <?= $i['Sutradara']; ?></li>
        <br><br>
    </ul>
        <?php } ?>

</body>
</html>