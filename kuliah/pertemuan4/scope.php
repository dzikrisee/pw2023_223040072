<!-- program dengan variabel global dan lokal -->
<?php 

$GLOBALS['varGlobal'] = 18; //variabel Global

function testVar()
{
    $varLokal = 1; variabel lokal
    echo "<p> test variabel didalam function.</p>";
    // mengakses variabel Global didalam function
    echo "Varibel global : ".$GLOBALS['varGlobal'];
    echo "<br>";
    echo "Variabel lokal : $varLokal ";
    echo "<br>";
}

testVar();

    echo "<p> test variabel didalam function.</p>";
    echo "Variabel global : $varGlobal ";
    echo "<br>";
    // mengakses varibel Lokal didalam function
    echo "Variabel lokal : $varLokal ";
    echo "<br>";

?>