<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Primer PHP</title>
    </head>

    <body>
        <?php
        echo "<table border=1 cellspacing=0>
                <tr style='background-color: #B5B2B2; font-weight: bold'>
                <td width=100>Cardinal</td>
                <td width=200>Ordinal</td>
                </tr>";

                $cardinal = 1;
                $ordinal = "";

                while($cardinal <= 10) {
                    switch($cardinal) {
                        case '1':
                            $ordinal = "Primero";
                            break;
                        case '2':
                            $ordinal = "Segundo";
                            break;
                        case '3':
                            $ordinal = "Tercero";
                            break;
                        case '4':
                            $ordinal = "Cuarto";
                            break;
                        case '5':
                            $ordinal = "Quinto";
                            break;
                        case '6':
                            $ordinal = "Sexto";
                            break;
                        case '7':
                            $ordinal = "Séptimo";
                            break;
                        case '8':
                            $ordinal = "Octavo";
                            break;
                        case '9':
                            $ordinal = "Noveno";
                            break;
                        case '10':
                            $ordinal = "Décimo";
                            break;
                    }
                    echo "<tr>";
                    echo "<td>" . $cardinal . "</td>";
                    echo "<td>" . $ordinal . "</td>";
                    echo "</tr>";
                    $cardinal++; 
                }
                
        echo "</table>";
        ?>
    </body>
</html>