<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Primer PHP</title>
    </head>
    <body>
        <?php
        function nombreCompleto($nombre, $anyo){
            echo "$nombre Molina. Fecha de nacimiento: $anyo.<br>";
        }

        nombreCompleto("Víctor", "1989");
        nombreCompleto("Maribel", "1988");
        ?>
    </body>
</html>