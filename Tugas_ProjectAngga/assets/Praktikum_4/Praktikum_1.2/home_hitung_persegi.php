<?php 
require_once "Persegi_panjang.php";

$bangunDatar = new persegiPanjang(10, 5);
echo $bangunDatar->getLuas();
echo "<br>";
echo $bangunDatar->getKeliling();
?>