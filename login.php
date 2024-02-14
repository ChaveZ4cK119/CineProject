<html>
<?php
include('conexion.php');
session_start();
extract($_POST);
$enlase = conectDb();
    if (empty($var_nickname) || empty($var_password)){   
        $var_nickname = $_POST['nickname'   ];
        $var_password = sha1($_POST['password']);

       $sql = $enlase -> prepare("SELECT * FROM cinne_log WHERE nickname_log=? and Password_log=? and state_log = 1;");
       $sql -> bindParam(1, $var_nickname);
       $sql -> bindParam(2, $var_password);
       $sql -> execute();
       $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

        if ($resultado){
            foreach ($resultado as $row)
            $_SESSION['usuario'] = $row['nickname_log'];
            header("location: principalmenu.php");
            $enlase = null;
        }else{
            header("location: index.php?x=1");
        }
        

    }

?>
<a href="index.php"><button>Inicio</button></a>
</html>