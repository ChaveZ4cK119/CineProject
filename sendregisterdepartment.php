<?php 
include('conexion.php');
include('Conexions/seguridad.php');
$var_deparetmentsname = $_POST['departmentsname'];
$var_countrysname = $_POST['countrysname'];
$enlase = conectDb();
if (empty($var_countrysname) || empty($var_deparetmentsname)){
    header('location: registerdepartment.php?e=1');
    }else{
    $sql1 = $enlase -> prepare("SELECT * FROM cinne_country WHERE name_cico=?");
    $sql1 ->   bindParam(1, $var_countrysname);
    $rta = $sql1 -> execute();
    $rta = $sql1 -> fetchAll(PDO::FETCH_ASSOC);
    if ($rta){
        $sql2 = $enlase -> prepare("SELECT * FROM cinne_department WHERE name_cide=?");
        $sql2 -> bindParam(1, $var_deparetmentsname);
        $rta2 = $sql2 -> execute();
        $rta2 = $sql2 -> fetchAll(PDO::FETCH_ASSOC);
            if ($rta2){
                header("location: registerdepartment.php?z=1");
            }else{
                $sql3 = $enlase -> prepare("SELECT id_cico FROM cinne_country WHERE name_cico=?");
                $sql3 -> bindParam(1, $var_countrysname, PDO::PARAM_STR);
                $sql3 -> execute();
                $rta3 = $sql3 -> fetch(PDO::FETCH_ASSOC);
                $idcico = $rta3['id_cico'];
                
                $sql4 = $enlase -> prepare("INSERT INTO cinne_department (name_cide, id_cico_cide) VALUES (?, ?)");
                $sql4 ->bindParam(1, $var_deparetmentsname);
                $sql4 ->bindParam(2, $idcico);
                $rta4 = $sql4 -> execute();
                if ($rta4) {
                    header("location: registerdepartment.php?x=1");
                }
            }
    }else{
        header("location: registerdepartment.php?y=1");
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
