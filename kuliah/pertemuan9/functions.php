<?php 
define('BASE_URL', '/PW2023_223040072/kuliah/pertemuan9/');

// function dd($value)
// {
//     echo "<pre>";
//     var_dump($value);
//     echo "</pre>";

//     die();
// }

function uriIs($url) {
    return ($_SERVER['REQUEST_URI'] === BASE_URL . $url) ? 'active' : '';
}
?>

<!-- /PW2023_223040072/kuliah/pertemuan9/index.php -->