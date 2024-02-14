<html>
<?php
include('conexion.php');
extract($_POST);
$enlase = conectDb();
        $var_name = $_POST['name'];
        $var_surname = $_POST['surname'];
        $var_brundate = $_POST['burndate'];
        $var_id = $_POST['id'];
        $var_nickname = $_POST['nickname'];
        $var_password = sha1($_POST['password']);
        $var_img = $_POST['img'];
    if (!empty($var_nickname) || empty($var_password) || empty($var_name) || empty($var_surname) || empty($var_brundate) || empty($var_id) || empty($var_img)){
$sql = $enlase -> prepare("SELECT * FROM cinne_log WHERE (nickname_log=?)");
       $sql -> bindParam(1, $var_nickname);
       $sql -> execute();
       $resultado=$sql->fetchAll();

        if ($resultado){
           header("location: registerpage.php?x=1");
}else{ 
        $sql3 = $enlase -> prepare("SELECT * FROM cinne_users WHERE (idnumber_cius=?)");
        $sql3 -> bindParam(1, $var_id);
        $sql3 -> execute();
        $resultado3 = $sql3->fetchAll();
if ($resultado3){
    header("location: registerpage.php?x=1");
}else{
       $sql1 = $enlase -> prepare("INSERT INTO cinne_users(nickname_cius, name_cius, surname_cius, burndate_cius, idnumber_cius, img_cius)
       VALUES (?,?,?,?,?,?)");
        $sql1 -> bindParam(1, $var_nickname);
       $sql1 -> bindParam(2, $var_name);
       $sql1 -> bindParam(3, $var_surname);
       $sql1 -> bindParam(4, $var_brundate);
       $sql1 -> bindParam(5, $var_id);
       $sql1 -> bindParam(6, $var_img);

       

       $resultado = $sql1 -> execute();
      


        if ($resultado){
            $sql2 = $enlase -> prepare("INSERT INTO cinne_log(nickname_log, password_log)
            VALUES (?,?)");
            $sql2 -> bindParam(1, $var_nickname);
            $sql2 -> bindParam(2, $var_password);
            $resultado2 = $sql2 -> execute();
            if ($resultado2){
                header("Location: index.php?z=3");
            $enlase = null;
            }
        }else{
          echo "Nos jodimos men !!";
        }
        }
    }
    }else{
        header("location: registerpage.php?y=2");
    }
 
?>

</html>