<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Primer PHP</title>
    </head>
    <body>
        <?php
        $colores = array("rojo", "verde", "azul", "amarillo");

        foreach($colores as $valor){
            echo "$valor <br>"; 
        }
        ?>
    </body>
</html>