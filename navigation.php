<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        .OneButton{
            height: 50px;
            width: 90px;
            display: inline-block;
            padding: 10px;
        }

        .inactiveButton{
            background-color: yellow;
        }

        .activeButton{
            background-color: red;
        }
    </style>
</head>
<body>

<?php
if ($page == 1)
{
    ?>

    <div class="OneButton activeButton"><a href="2TPIF-E PHP work.php">School Works</a></div>
    <?php
}
else {
    ?>

    <div class="OneButton inactiveButton"><a href="2TPIF-E PHP work.php">School Works</a></div>
    <?php
    }
?>

<?php
if ($page == 2)
{
    ?>
    <div class="OneButton activeButton"><a href="sept.php">Sept</a></div>
    <?php
}
else
{
    ?>
    <div class="OneButton inactiveButton"><a href="sept.php">Sept</a></div>
    <?php
}
?>

<?php
if ($page == 3)
{
    ?>
    <div class="OneButton activeButton"><a href="29sept.php">29sept</a></div>
    <?php
}
else
{
    ?>
    <div class="OneButton inactiveButton"><a href="29sept.php">29sept</a></div>
    <?php
}
?>

<?php
if ($page == 4)
{
    ?>
    <div class="OneButton activeButton"><a href="29sept-2.php">29sept-2</a></div>
    <?php
}
else
{
    ?>
    <div class="OneButton inactiveButton"><a href="29sept-2.php">29sept-2</a></div>
    <?php
}
?>

<?php
if ($page == 5)
{
    ?>
    <div class="OneButton activeButton"><a href="30sept.php">30sept</a></div>
    <?php
}
else
{
    ?>
    <div class="OneButton inactiveButton"><a href="30sept.php">30sept</a></div>
    <?php
}
?>
</body>
</html>