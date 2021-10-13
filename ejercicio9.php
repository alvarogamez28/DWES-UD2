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

    echo $_SERVER['PHP_SELF'];
    printf("</p>");
    echo ("El nombre de archivo del script ejecutándose actualmente, relativo a la raiz de documentos.");
    printf("</p>");
    echo $_SERVER['SERVER_ADDR'];
    printf("</p>");
    echo ("La dirección IP del servidor bajo la cual está siendo ejecutado el script actual.");
    printf("</p>");
    echo $_SERVER['SERVER_NAME'];
    printf("</p>");
    echo ("El nombre del servidor anfitrión bajo el que está siendo ejecutado el script actual. Si el script está corriendo en un host virtual, éste será el valor definido para ese host virtual.");
    printf("</p>");
    echo $_SERVER['DOCUMENT_ROOT'];
    printf("</p>");
    echo ("El directorio raiz de documentos bajo el que está siendo ejecutado el script actual, tal y como se define en el archivo de configuración del servidor.");
    printf("</p>");
    echo $_SERVER['REMOTE_ADDR'];
    printf("</p>");
    printf("</p>");
    echo ("La dirección IP desde donde el usuario está observado la página actual.");
    printf("</p>");
    echo $_SERVER['REQUEST_METHOD'];
    printf("</p>");
    echo ("Cuál método de petición fue usado para acceder a la página; es decir, 'GET', 'HEAD', 'POST', 'PUT'.");
    ?>
</body>
</html>