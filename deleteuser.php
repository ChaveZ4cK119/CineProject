<?php 
include("conexion.php");
extract($_REQUEST);
$enlase=conectDb();
$indicator=$_REQUEST['x'];
$sql = $enlase -> prepare("UPDATE cinne_users SET state_cius = 0 WHERE id_cius=?");
$sql -> bindParam(1, $indicator);
$sql -> execute();
$resultado = $sql->rowCount();

$sql3 = $enlase -> prepare("SELECT nickname_cius FROM cinne_users WHERE id_cius=?");
$sql3 -> bindParam(1, $indicator);
$sql3 -> execute();
$rta3 = $sql3 -> fetch(PDO::FETCH_ASSOC);
$user = $rta3['nickname_cius'];


$sql2 = $enlase -> prepare("UPDATE cinne_log SET state_log = 0 WHERE nickname_log=?");
$sql2 -> bindParam(1, $user);
$sql2 -> execute();
$resultado2 = $sql2->rowCount();

if($resultado > 0 & $resultado2 > 0){
    header('location: consultas.php');
    $enlase = null;
}else{
    echo "Huston, tenemos un problema :'v";
}
?>