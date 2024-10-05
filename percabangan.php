<?php

$hero = "vexana";
$level ="2";

switch ($level) {
    case 1:
        echo $hero. " hanya memiliki skill 1 ";
    break;
    
    case 2:
        echo $hero. " skill 2 telah terbuka ";    
    break;

    case 3:
        echo $hero. " penambahan level skill 1 & 2, skill 3 belum dapat dibuka ";
    break;

    case 4:
        echo $hero. " skill 3 telah terbuka ";
    
    default:
        echo $hero. " menghilang dari lane ";

}




if ($level < 4) {
    echo $hero. " skill 1 & 2 terbuka";
}elseif ($level >= 4) {
    echo $hero. " sudah memiliki ulti";
}else {
    echo $hero. "player afk";
}

?>



<?php
$nilai = 85;

if ($nilai >= 90) {
    echo "Nilai Anda A.";
} elseif ($nilai >= 80) {
    echo "Nilai Anda B.";
} elseif ($nilai >= 70) {
    echo "Nilai Anda C.";
} else {
    echo "Nilai Anda D.";
}


// BUKA BROWSER UTK MELIHAT 