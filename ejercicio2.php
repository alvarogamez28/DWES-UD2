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
        
        $areaTriangulo = (10*5)/2;
            echo "El área del triangulo es: $areaTriangulo";
            echo "</br>";

        $areaCuadrado = (10*5);
            echo "El área del triangulo es: $areaCuadrado";
            echo "</br>";

        $diagonalMayor=10;
        $diagonalMenor=5;
        $areaRombo = ($diagonalMayor*$diagonalMenor)/2;
            echo "El área del rombo es: $areaRombo";
            echo "</br>";

        define("PI", 3.14159);
        $radio = 8.2;
        $areaCirculo = PI*$radio*$radio;
        echo("El círculo de radio $radio tiene un área de $areaCirculo");
    ?>
</body>
</html>