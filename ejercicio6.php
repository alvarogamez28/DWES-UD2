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
    $operacionesDiarias="4";
    $operacionesSemanales=30;

    define("maxdiaria", 6);
    define("maxsemanal", 30);

    echo "El valor de operaciones diarias es mayor o igual que el máximo ", var_export($operacionesDiarias>=maxdiaria);
    printf("</p>");
    echo "El valor de operaciones semanales es mayor o igual que el máximo ", var_export($operacionesSemanales>=maxsemanal);
    printf("</p>");
    echo "El valor de operaciones diarias es es identico al máximo ", var_export($$operacionesDiarias===maxdiaria);
    printf("</p>");
    echo "El valor de operaciones diarias es distintio al de las operaciones semanales ", var_export($$operacionesDiarias!=$operacionesSemanales);


    ?>

</body>
</html>