<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Primer PHP</title>
    </head>

    <body>
        <?php
        echo "<table border=1 cellspacing=0>
                <tr style='background-color: #00CCFF; font-weight: bold'>
                <td width=200 align=center>Tabla del 5</td>
                <td width=200 align=center>Tabla del 13</td>
                <td width=200 align=center>Tabla del 11</td>
                </tr>";

                $resultado = 0;
                $tablas = array("primera"=>"5", "segunda"=>"13", "tercera"=>"11");

                for ($i=1; $i<11; $i++) {
                    echo "<tr>";
                            foreach ($tablas as $x_valor) {
                                $resultado = $x_valor * $i;

                                echo "<td align=center>" . $x_valor . " x " . $i . " = " . $resultado . "</td>";

                            }

                    echo "</tr>";
                }
        echo "</table>";
        ?>
    </body>
</html>