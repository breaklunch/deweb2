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
    $sql = "SELECT * FROM persona";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows > 0){
        echo $resultado->num_row; 
    }
    ?>
</body>
</html>