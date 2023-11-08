<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Primer PHP</title>
    </head>
    <body>
        <?php
        $coches = array("Volvo", "BMW", "Toyota");
        $arrLong = count($coches);

        for($x=0; $x<$arrLong; $x++) {
            echo $coches[$x];
            echo "<br>";
        }
        ?>
    </body>
</html>