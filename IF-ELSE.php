<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Primer PHP</title>
    </head>
    <body>
        <?php 
        $t = date("H");

        if($t < 20){
            echo "Ten un buen día.";
        }else{
            echo "Ten una buena noche.";
        }
        ?>
    </body>
</html>