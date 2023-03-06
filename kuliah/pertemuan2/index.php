<?php 
    $nama = "Masjo";
    $nrp = "223040072";
    $umur = 20;
    $mataKuliah = "Pemograman Web";
    // echo "Nama  : ". $nama . "</br>";

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
    <h1>
        <?php 
            echo "Hello, $nama";
        ?>
    </h1>
    <h3>
        <?php 
             echo "Mata Kuliah : $mataKuliah"  . "</br>";
             echo "NRP : $nrp" . "</br>";
             echo "Usia : $umur";

        ?>
    </h3>
</body>
</html>
