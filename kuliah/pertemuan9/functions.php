<?php 
define('BASE_URL', '/pw2023_223040124/kuliah/pertemuan9/');

function checkAktive($uri){
    return ($_SERVER["REQUEST_URI"] === BASE_URL . $uri3)
}
?>