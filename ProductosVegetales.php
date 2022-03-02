<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $conexion = new mysqli('127.0.0.1', 'root', '', 'fruteria');

        $conexion->set_charset('utf8');

        $sql = "insert into articulos (id,nombre,descripcion,stock,precio) values (?,?,?,?,?)";
    
        $instruccion = $conexion->prepare($sql);
        $instruccion->bind_param('dssss',$_POST["id"], $_POST["nombre"],$_POST["descripcion"],$_POST["stock"],$_POST["precio"]);
    
        $instruccion->execute();
    ?>
</body>
</html>