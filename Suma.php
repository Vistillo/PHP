<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Primer PHP</title>
    </head>
    <body>
        <?php
        function suma($x, $y){
            $z = $x + $y;
            return $z;
        }

        echo "5 + 10 = " . suma(5, 10) . "<br>";
        echo "3 + 7 = " . suma(3, 7) . "<br>";
        echo "2 + 4 = " . suma(2, 4);
        ?>
    </body>
</html>