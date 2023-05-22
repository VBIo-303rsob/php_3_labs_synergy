<!DOCTYPE html>
<html>
<head>
    <title> Shatov Ilya </title>
</head>
<body>
    <?php
    function printTable($str1, $str2, $str3, $str4) {
        echo "<table>";
        echo "<tr><td>$str1</td></tr>";
        echo "<tr><td>$str2</td></tr>";
        echo "<tr><td>$str3</td></tr>";
        echo "<tr><td>$str4</td></tr>";
        echo "</table>";
    }
    ?>

    <h1> Shatov Ilya </h1>
    <?php printTable("Строка 1", "Строка 2", "Строка 3", "Строка 4"); ?>
</body>
</html>