<!-- variabel static -->
<?php 

function varStatic() {
    static $x = 10; // mendeklarasikan variabel statis
    echo $x;
    $x++;
    echo "</br>";
}

varStatic(); // memanggil function varStatic
varStatic();
varStatic();
?>