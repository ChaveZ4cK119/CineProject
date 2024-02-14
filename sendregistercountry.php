<?php 
include('conexion.php');
include('Conexions/seguridad.php');
$var_countrysname = $_POST['countrysname'];
$enlase = conectDb();
if (empty($var_countrysname)){
    header('location: registercountry.php?y=1');
    }else{
    
    $sql1 = $enlase -> prepare("SELECT * FROM cinne_country WHERE name_cico=?");
    $sql1 -> bindParam(1, $var_countrysname);
    $rta = $sql1 -> execute();
    $rta = $sql1 -> fetchAll(PDO::FETCH_ASSOC);
    if ($rta){
        header("location: registercountry.php?x=1");
    }else{
        $sql2 = $enlase -> prepare("INSERT INTO cinne_country (name_cico) VALUES (?)");
        $sql2 -> bindParam(1, $var_countrysname);
        $rta = $sql2 -> execute();
        if ($rta){
            header("location: registercountry.php?z=1");
        }else{
            header("location: registercountry.php?e=1");
        }
        
    }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br>
    <title>prueba xd</title>
</head>
<body>
<a href="registermovie.php"><button>Volver</button></a>
</body>
</html>
