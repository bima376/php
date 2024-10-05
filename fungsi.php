<?php

// perkalian
function luasSegitiga($alas, $tinggi){
    $luas = 3 * $alas * $tinggi;
    return $luas;
}

echo luasSegitiga(3,2);

?>



<?php
// penjumlahan
function penjumlahan(...$input) {
    $result = 0;

    foreach ($input as $value) {
        $result = $result + $value;
    }
    return $result; 
}

echo penjumlahan(1,2,3,4);


// BUKA BROWSER UTK MELIHAT 