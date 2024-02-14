<?php 
include("conexion.php");
$enlase = conectDb();
extract($_REQUEST);
$usuarios = $_REQUEST['x'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de usuario</title>
</head>
<body>
    <h1>Actualizar datos</h1>
    <form action="updateuser.php" method="post">
    <?php 
    $sql1 = $enlase -> prepare("SELECT * FROM cinne_users WHERE id_cius=?");
    $sql1 -> bindParam(1, $usuarios);
    $sql1 -> execute();
    $resultado1=$sql1->fetchAll();
    if ($resultado1!=0){
        foreach ($resultado1 as $usuarios1){

        
     ?>
    <label>Name</label><br/>
    <input type="text" name="name" value="<?php echo $usuarios1['name_cius'];?>" required><br>
    <label>Surname</label><br/>
    <input type="text" name="surname" value="<?php echo $usuarios1['surname_cius'];?>" required><br>
    <label>Burndate</label><br/>
    <input type="date" name="burndate" value="<?php echo $usuarios1['burndate_cius'];?>" required><br>
    <label>ID</label><br/>
    <input type="number" name="id" value="<?php echo $usuarios1['idnumber_cius'];?>" required><br>
    <input type="hidden" name="id2" value="<?php echo $usuarios1['id_cius'];?>" required><br>
    <br>
    <input type="submit" value="Actualizar">

    <?php
    }
    $enlase = null;
   } else {
    echo"La tabla no tiene ni damier XD";
   }
    ?>

    </form>
</body>
</html>