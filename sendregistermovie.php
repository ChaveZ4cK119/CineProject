<?php 
include('conexion.php');
include('Conexions/seguridad.php');
$var_moviesname = $_POST['moviesname'];
$var_directorsname = $_POST['directorsname'];
$var_protas = $_POST['protas'];
$var_clasification = $_POST['clasification'];
$var_releasedate = $_POST['releasedate'];
$enlase = conectDb();
if (empty($var_moviesname) || empty($var_directorsname) || empty($var_clasification) || empty($var_releasedate)){
    header('location: registermovie.php?y=1');
    }else{
    
    $generos = ' ';
    if (isset($_POST['gender'])){
    $generos = implode(' - ', $_POST['gender']);
    $sql = $enlase -> prepare('INSERT INTO cine_movie (name_cimo, namedirecction_cimo, protas_cimo, clasification_cimo, releasedate_cimo) VALUES 
    (?,?,?,?,?)');
    $sql -> bindParam(1, $var_moviesname);
    $sql -> bindParam(2, $var_directorsname);
    $sql -> bindParam(3, $var_protas);
    $sql -> bindParam(4, $var_clasification);
    $sql -> bindParam(5, $var_releasedate);
    $resultado = $sql -> execute();
    
    if ($resultado){
        $ids = $enlase -> lastInsertId();
        $sql2 = $enlase -> prepare('INSERT INTO cinne_genders (id_cimo_cigen, name_cigen) VALUES (?,?)');
        $sql2 -> bindParam(1, $ids);
        $sql2 -> bindParam(2, $generos);
        $resultado2 = $sql2 -> execute();
        if ($resultado2){
            header("location: registermovie.php?e=1");
            
        }
    }
    }else{
        header("location: registermovie.php?x=1");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br>
    <title>Registro de peliculas</title>
</head>
<body>

</body>
</html>
