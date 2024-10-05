<?php

$keluarga = [
    "ayah" => ["tinggi","berjanggut"], 
    "ibu"=> ["pendek","lemu"],
    "anak"=> ["tinggi","kurus"],
];

// iterasi
foreach ($keluarga as $key => $value) {
    echo $keluarga[$key][0];
    echo "<br />";
}echo "<br />";


foreach ($keluarga as $key => $value) {
    echo $key;
    echo "<br />";
}echo "<br />";

// iterasi bertingkat
foreach ($keluarga as $key => $value) {
    foreach ($value as $ok) {
        echo $ok;
        echo "<br />";
    }
    echo "<br/>";
}




// BUKA BROWSER UTK MELIHAT 
