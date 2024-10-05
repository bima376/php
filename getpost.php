<!-- GET -->


<?php

$namaGue = $_GET["nama"];
echo " Namaku adalah ".$namaGue;

?>

<form action="getpost.php" method="GET">
    Input Nama: <input type="text" name="nama" >
    <input type="submit" >
</form>


<!-- PERBEDAAN GET 2-->

<?php

if (isset($_GET["nama"])) {
    $namaGue = $_GET["nama"];
    echo " Namaku adalah ".$namaGue;
}

?>

<form action="getpost.php" method="GET">
    Input Nama: <input type="text" name="nama" >
    <input type="submit" >
</form>



<!-- POST -->
<?php

if (isset($_POST["nama"])) {
    $namaGue = $_POST["nama"];
    echo " Namaku adalah ".$namaGue;
}

?>

<form action="getpost.php" method="POST">
    Input Nama: <input type="text" name="nama" >
    <input type="submit" >
</form>




<!-- // BUKA BROWSER UTK MELIHAT  -->
 