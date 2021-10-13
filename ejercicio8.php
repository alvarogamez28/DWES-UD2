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

    $var1="10";
    $var2=5.10;
    printf("%d",$var1);
    printf("</p>");
        echo gettype($var1);
        printf("</p>");
        var_export(is_bool($var1));
        printf("</p>");
        var_export(is_string($var1));
        printf("</p>");
    printf("%.2f",$var2);
    printf("</p>");
        var_export(is_float($var2));
        printf("</p>");
        var_export(is_numeric($var2));
        printf("</p>");
        var_export(is_integer($var2));
    printf("</p>");
    $var3 = (integer)$var1;
    printf("Conversion de %d a integer",$var1);
    var_export(gettype($var3));

    ?>
</body>
</html>