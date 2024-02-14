<?php 
include("conexion.php");
extract($_POST);
$enlase=conectDb();
$usuarios = $_POST['id2'];
   $var_name = $_POST['name'];
   $var_surname = $_POST['surname'];
   $var_brundate = $_POST['burndate'];
   $var_id = $_POST['id'];

if (empty($var_name) || empty($var_surname) || empty($var_brundate) || empty($var_id)){
   echo"no se han llenado tdos los datos";
   }else{
   $var_name = $_POST['name'];
   $var_surname = $_POST['surname'];
   $var_brundate = $_POST['burndate'];
   $var_id = $_POST['id'];

   $sql = $enlase -> prepare("UPDATE cinne_users SET name_cius=?, surname_cius=?, burndate_cius=?, idnumber_cius=? WHERE id_cius=?");
   $sql -> bindParam(1, $var_name);
   $sql -> bindParam(2, $var_surname);
   $sql -> bindParam(3, $var_brundate);
   $sql -> bindParam(4, $var_id);
   $sql -> bindParam(5, $usuarios);

   $resultado = $sql -> execute();


    if ($resultado){
        echo "actualizacion exitosa";
        $enlase = null;
    }else{
      echo "Nos jodimos men !!";
    }
   } 



?>