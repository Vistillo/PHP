<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Primer PHP</title>
    </head>
    <body>
        <?php
        $edad = array("Pedro"=>"25", "Ale"=>"37", "Sara"=>"23");

        foreach($edad as $x => $x_valor) {
            echo "Clave: " . $x . ", Valor: " . $x_valor;
            echo "<br>";
        }
        ?>
    </body>
</html>