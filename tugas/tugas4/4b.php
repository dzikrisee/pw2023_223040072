<?php 

    // 6 elemen perangkat keras komputer
    $peranngkatKerasKomputer = ['Motherboard', 'Processor', 'Hard Disk', 'PC Coller', 'VGA Card', 'SSD'];

    // Menambahkan elemen baru
    array_push($peranngkatKerasKomputer, 'Card Reader', 'Modem');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<body>

    <!-- sebelum ditambahkan elemen baru -->
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php for($i = 0; $i <= 5; $i++) { ?>
            <li><?= $peranngkatKerasKomputer[$i] ?></li>
        <?php } ?>
    </ol>


    <!-- setelah ditambahkan elemen baru ( Card Reader & Modem ) -->
    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php 
            sort($peranngkatKerasKomputer); //
            for($i = 0; $i < count($peranngkatKerasKomputer); $i++) { ?>
                <li><?= $peranngkatKerasKomputer[$i]; ?></li>
        <?php } ?>
    </ol>

</body>
</html>