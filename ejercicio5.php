<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor1=true;
        $valor2=false;
        $valor3=false;
    ?>
    <h1>Operacion AND</h1>
    <table border="1">
        <tr>
            <th>Variable 1</th>
            <th>Variable 2</th>
            <th>Variable 3</th>
            <th>Resultado</th>
        </tr>
        <?php
        $var1=true;
        $var2=true;
        $var3=true;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 && $var2 && $var3) ?></td>
        </tr>
        <?php
        $var1=true;
        $var2=true;
        $var3=false;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 && $var2 && $var3) ?></td>
        </tr>
        <?php
        $var1=true;
        $var2=false;
        $var3=false;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 && $var2 && $var3) ?></td>
        </tr>
        <?php
        $var1=true;
        $var2=false;
        $var3=true;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 && $var2 && $var3) ?></td>
        </tr>
        <?php
        $var1=false;
        $var2=true;
        $var3=true;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 && $var2 && $var3) ?></td>
        </tr>
        
        <?php
        $var1=false;
        $var2=true;
        $var3=false;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 && $var2 && $var3) ?></td>
        </tr>
        <?php
        $var1=false;
        $var2=false;
        $var3=true;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 && $var2 && $var3) ?></td>
        </tr>
        <?php
        $var1=false;
        $var2=false;
        $var3=false;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 && $var2 && $var3) ?></td>
        </tr>
    </table>

    <h1>Operacion OR</h1>
    <table border="1">
        <tr>
            <th>Variable 1</th>
            <th>Variable 2</th>
            <th>Variable 3</th>
            <th>Resultado</th>
        </tr>
        <?php
        $var1=true;
        $var2=true;
        $var3=true;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 || $var2 || $var3) ?></td>
        </tr>
        <?php
        $var1=true;
        $var2=true;
        $var3=false;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 || $var2 || $var3) ?></td>
        </tr>
        <?php
        $var1=true;
        $var2=false;
        $var3=false;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 || $var2 || $var3) ?></td>
        </tr>
        <?php
        $var1=true;
        $var2=false;
        $var3=true;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 || $var2 || $var3) ?></td>
        </tr>
        <?php
        $var1=false;
        $var2=true;
        $var3=true;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 || $var2 || $var3) ?></td>
        </tr>
        
        <?php
        $var1=false;
        $var2=true;
        $var3=false;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 || $var2 || $var3) ?></td>
        </tr>
        <?php
        $var1=false;
        $var2=false;
        $var3=true;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 || $var2 || $var3) ?></td>
        </tr>
        <?php
        $var1=false;
        $var2=false;
        $var3=false;
        ?>
        <tr>
            <td><?php var_export($var1) ?></td>
            <td><?php var_export($var2) ?></td>
            <td><?php var_export($var3) ?></td>
            <td><?php var_export($var1 || $var2 || $var3) ?></td>
        </tr>
    </table>
</body>
</html>