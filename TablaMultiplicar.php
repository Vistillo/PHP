<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Primer PHP</title>
    </head>

    <body>
        <table border="1" cellspacing="0">
            <tr style="background-color: #00CCFF; font-weight: bold">
                <td width="200" align="center">Tabla del 5</td>
                <td width="200" align="center">Tabla del 13</td>
                <td width="200" align="center">Tabla del 11</td>
            </tr>
            <?php
                $resultado = 0;
                $tablas = array("primera"=>"5", "segunda"=>"13", "tercera"=>"11");

                for ($i=1; $i<11; $i++) {?>
                    <tr>
                        <?php
                            foreach ($tablas as $x_valor) {
                                $resultado = $x_valor * $i; ?>

                                <td align="center"><?php echo $x_valor . " x " . $i . " = " . $resultado;?></td>

                            <?php } ?>

                    </tr>
                <?php } ?>
        </table>
    </body>
</html>