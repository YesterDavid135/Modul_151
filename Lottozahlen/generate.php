<!DOCTYPE html>
<html lang="de-CH">
<head lang="DE">
    <title>Lottozahlen</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h2>Lottozahlen heute</h2>

<?php

{
    $numbers = array();
    for ($i = 1; $i < 42; $i++) {
        $numbers[$i] = $i;
    }
    shuffle($numbers);

    for ($i = 0; $i < 6; $i++) {
        echo "<span class=kugel>";
        echo ($numbers[$i]);
        echo "</span>";
    }

    echo "<span class=super>";
    echo ($numbers[7]);
    echo "</span>";

}
?>
</html>