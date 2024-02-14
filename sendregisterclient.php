<html>
<?php
include('conexion.php');
extract($_POST);
$enlase = conectDb();
        $var_name = $_POST['name'];
        $var_surname = $_POST['surname'];
        $var_brundate = $_POST['burndate'];
        $var_id = $_POST['id'];
        $var_email = $_POST['email'];
        $var_phnumber = $_POST['phnumber'];
        $var_clientscity = $_POST['clientscity'];
        $var_ndir = $_POST['ndir'];
    if (!empty($var_name) || empty($var_surname) || empty($var_brundate) || empty($var_id) || empty($var_email) || empty($var_phnumber) || empty($var_clientscity)){
$sql = $enlase -> prepare("SELECT * FROM cinne_clients WHERE (idnumber_cicli=?)");
       $sql -> bindParam(1, $var_id);
       $sql -> execute();
       $resultado=$sql->fetchAll();

        if ($resultado){
           header("location: registerclient.php?z=1"); /* datos duplicados*/
}else{ 
        $sql3 = $enlase -> prepare("SELECT * FROM cinne_municipalities WHERE (name_cimu=?)");
        $sql3 -> bindParam(1, $var_clientscity);
        $sql3 -> execute();
        $resultado3 = $sql3->fetchAll();
if ($resultado3){
    $sql2 = $enlase -> prepare ("SELECT id_cimu FROM cinne_municipalities WHERE (name_cimu=?)");
    $sql2 -> bindParam(1, $var_clientscity);
    $sql2 -> execute();
    $resultado2 = $sql2->fetch(PDO::FETCH_ASSOC);
    $idcimu = $resultado2['id_cimu'];

    $sql1 = $enlase -> prepare("INSERT INTO cinne_clients (name_cicli, surname_cicli, burndate_cicli, idnumber_cicli, id_cimu_cicli)
       VALUES (?,?,?,?,?)");
        $sql1 -> bindParam(1, $var_name);
       $sql1 -> bindParam(2, $var_surname);
       $sql1 -> bindParam(3, $var_brundate);
       $sql1 -> bindParam(4, $var_id);
       $sql1 -> bindParam(5, $idcimu);
       $resultado = $sql1 -> execute();
       $idcicli = $enlase -> lastInsertId();
        if ($resultado){
            $sql2 = $enlase -> prepare("INSERT INTO cinne_clientscontacts(id_cicli_ciclicon, email_ciclicon, phonenumber_ciclicon) VALUES (?,?,?)");
            $sql2 -> bindParam(1, $idcicli);
            $sql2 -> bindParam(2, $var_email);
            $sql2 -> bindParam(3, $var_phnumber);
            $resultado2 = $sql2 -> execute();
            if ($resultado2){
               /* */
                $sql2 = $enlase -> prepare("INSERT INTO cinne_userdirecction(id_cimu_ciusdi, numberdirecction_ciusdi, id_cicli_ciusdi) VALUES (?,?,?)");
                $sql2 -> bindParam(1, $idcimu);
                $sql2 -> bindParam(2, $var_ndir);
                $sql2 -> bindParam(3, $idcicli);
                $resultado2 = $sql2 -> execute();
                if ($resultado2){
                    header("location: registerclient.php?e=1");
                }
            $enlase = null;
            }
        }else{
          echo "Nos jodimos men !!";
        }
}else{
    header("location: registerclient.php?x=1");/* Ciudad no encontrada*/
        }
    }
    }else{
        header("location: registerclient.php?y=1");/* campos vacios ready*/
    }
 
?>
<a href="consultas.php"><button>Tabla de usuarios</button></a>
</html>