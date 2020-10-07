<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

$Carrot = "3€";
$Tomatoes = "8€";
$Budget = "200€";
$BottleCapacity = "50l";

?>

<h2> for a given:
<ul>
    <li>Carrot Price of <?= $Carrot ?> per kg</li>
    <li>Price difference with Tomatoes of <?= $Tomatoes ?> </li>
    <li>Budget of <?= $Budget ?> </li>
    <li>Ratio between 1kg of tomatoes and 1l of tomato-juice </li>
    <li>A bottles capacity of <?= $BottleCapacity ?> </li>
</ul>
</h2>

<?php
print ("How many tomatoes does he want to buy?");

echo "<br>";
?>

<?php
$page = 4;
include "navigation.php"
?>

</body>
</html>


