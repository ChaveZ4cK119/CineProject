<?php 
include('conexion.php');
include('Conexions/seguridad.php');
$var_departmentsname = $_POST['departmentsname'];
$var_citysname = $_POST['citysname'];
$enlase = conectDb();
if (empty($var_citysname) || empty($var_departmentsname)){
    header('location: registercity.php?e=1');
    }else{
    $sql1 = $enlase -> prepare("SELECT * FROM cinne_department WHERE name_cide=?");
    $sql1 ->   bindParam(1, $var_departmentsname);
    $rta = $sql1 -> execute();
    $rta = $sql1 -> fetchAll(PDO::FETCH_ASSOC);
    if ($rta){
        $sql2 = $enlase -> prepare("SELECT * FROM cinne_municipalities WHERE name_cimu=?");
        $sql2 -> bindParam(1, $var_citysname);
        $rta2 = $sql2 -> execute();
        $rta2 = $sql2 -> fetchAll(PDO::FETCH_ASSOC);
            if ($rta2){
                header("location: registercity.php?z=1");
            }else{
                $sql3 = $enlase -> prepare("SELECT id_cide FROM cinne_department WHERE name_cide=?");
                $sql3 -> bindParam(1, $var_departmentsname, PDO::PARAM_STR);
                $sql3 -> execute();
                $rta3 = $sql3 -> fetch(PDO::FETCH_ASSOC);
                $idcide = $rta3['id_cide'];
                echo $idcide;
                
                $sql4 = $enlase -> prepare("INSERT INTO cinne_municipalities (name_cimu, id_cide_cimu) VALUES (?, ?)");
                $sql4 ->bindParam(1, $var_citysname);
                $sql4 ->bindParam(2, $idcide,PDO::PARAM_STR);
                $rta4 = $sql4 -> execute();
                if ($rta4) {
                    header("location: registercity.php?x=1");
                }
            }
    }else{
        header("location: registercity.php?y=1");
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
