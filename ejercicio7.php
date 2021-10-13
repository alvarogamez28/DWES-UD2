<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $var1=24;
    $var2=46;
    $and=$var1&$var2;
    $not=~$var1; 
    $not1=~$var2;
    //$or=$var1&$var2;
    //$xor=$var1&$var2;
    printf("El valor en binario de la variable 1 es %.b", $var1);
    printf("</p>");
    printf("El valor en binario de la variable 1 es %.b", $var2);
    printf("</p>");
    printf("El resultado de la operacion de comparación bit a bit AND es es %.b", $and);
    printf("</p>");
    printf("El resultado de la operacion de comparación bit a bit NOT es es %.b", $not);
    printf("</p>");
    printf("El resultado de la operacion de comparación bit a bit NOT es es %.b", $not1);
    ?>
</body>
</html>