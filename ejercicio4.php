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
    $precioPantalon=29.99;
    $numeroPantalones=3;
    $precioCamisa=25.99;
    $numeroCamisas=2;
    $precioZapatos=45.99;
    $descuentoZapato=12;
    

    $totalPrecio=($precioPantalon*$numeroPantalones)+($precioCamisa*$numeroCamisas);
    
    define("descuento",8);
    $descuento=($totalPrecio*descuento)/100;
    $totalDescuento=($totalPrecio-$descuento);

    $desZapatos=$precioZapatos-($precioZapatos*$descuentoZapato)/100;

    $totalDescuento=$totalDescuento+$desZapatos;
    printf("El precio del pantalon es de %.2f", $precioPantalon);
    printf("</p>");
    printf("El precio de una camisa es de %.2f", $precioCamisa);
    printf("</p>");
    printf("El total sin descuento es de %.2f", $totalPrecio);
    printf("</p>");
    printf("El total con descuento es de %.3f", $totalDescuento);
    printf("</p>");
    printf("El precio de los zapatos sin descuento es de %.2f", $precioZapatos);
    printf("</p>");
    printf("El precio de los zapatos con descuento es de %.2f", $totalDescuento);



    ?>
</body>
</html>