<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

for ($i = 0; $i <= 10; $i++){
    ?>
    <p> This is the <?=$i; ?>th paragraph</p>
    <?php
}

echo "<br>";
?>

<?php
$page = 5;
include "navigation.php"
?>

</body>
</html>