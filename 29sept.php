<?php

$DifferencePrice = 1;
$PriceCarrots = 2;
$Money = 300;
$TomatoesToTJ = 2;
$BottleCapacity = 50;

$TJQuantity = ($Money/($DifferencePrice + $PriceCarrots))*$TomatoesToTJ;

print $TJQuantity;

print "<br>";

$UsedTomato = $BottleCapacity / $TomatoesToTJ;
print $UsedTomato;

echo "<br>";
?>

<?php
$page = 3;
include "navigation.php"
?>
