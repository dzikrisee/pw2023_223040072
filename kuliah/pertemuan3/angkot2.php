<?php 

$jml_angkot = 10;
$no_angkot = 1;
$angkot_rusak = 4;

while ($no_angkot <= $jml_angkot - $angkot_rusak) {
    echo "Angkot no.$no_angkot beroperasi dengan baik. <br>";
    $no_angkot++;
}

for($i = 7; $i <= 10; $i++) {
    echo "Angkot no.$i sedang rusak. <br>";
}

?>
