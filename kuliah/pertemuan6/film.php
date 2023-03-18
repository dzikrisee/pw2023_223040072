<?php 
    $daftarFilm = [
        [ // no.1
            'poster' => 'antman.jpg',
            'Judul' => 'The Antman',
            'Tahun' => '2015',
            'Genre' => ['Action, ', 'Adventure, ', 'Comedy'],
            'Pemeran Utama' => [
                'Paul Rudd, ', 
                'Michael Douglas, ', 
                'Evangeline Lilly'],
            'Sutradara' => 'Peyton Reed'
        ],
        [ // no.2
            'poster' => 'hawkey.jpg',
            'Judul' => 'Hawkey',
            'Tahun' => '2021',
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
            'Pemeran Utama' => [
                'Chris Hemsworth, ', 
                'Natalie Portman, ', 
                'Christian Bale'],
            'Sutradara' => 'Taika Waititi'
        ],
        [ // no.4
            'poster' => 'galaxy.jpg',
            'Judul' => 'Guardians of the Galaxy',
            'Tahun' => '2014',
            'Genre' => ['Action, ', 'Adventure, ', 'Comedy'],
            'Pemeran Utama' => [
                'Chris Pratt, ', 
                'Zoe Saldana, ', 
                'Dave Bautista, ', 
                'Vin Diesel'],
            'Sutradara' => 'James Gunn'
        ],
        [ // no.5
            'poster' => 'drstrange.jpg',
            'Judul' => 'Doctor Strange',
            'Tahun' => '2016',
            'Genre' => ['Action, ', 'Adventure'],
            'Pemeran Utama' => [	
                'Benedict Cumberbatch, ',
                'Chiwetel Ejiofor, ',
                'Rachel McAdams, ',
                'Benedict Wong, ',
                'Michael Stuhlbarg, '],
            'Sutradara' => 'Scott Derrickson'
        ],
        [ // no.6
            'poster' => 'spiderman.jpg',
            'Judul' => 'Spriderman: Home Coming',
            'Tahun' => '2017',
            'Genre' => ['Action, ', 'Adventure, ', 'Comedy'],
            'Pemeran Utama' => [	
                'Tom Holland, ',
                'Michael Keaton, ',
                'Jon Favreau, ',
                'Zendaya'],
            'Sutradara' => 'Jon Watts'
        ],
        [ // no.7
            'poster' => 'avenger.jpg',
            'Judul' => 'Avenger: Infinity War',
            'Tahun' => '2018',
            'Genre' => ['Action, ', 'Adventure'],
            'Pemeran Utama' => [	
                'Robert Downey Jr., ',
                'Chris Hemsworth, ',
                'Mark Ruffalo, ',
                'Chris Evans, ',
                'Scarlett Johansson, ',
                'Benedict Cumberbatch'],
            'Sutradara' => 'Anthony Russo'
        ], 
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