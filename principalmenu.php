 <?php
    
    include('Conexions/seguridad.php');
    include('conexion.php');
    $enlase = conectDb();
    $nameuser = $_SESSION['usuario'];
    $sql = $enlase -> prepare("SELECT name_cius, surname_cius, img_cius FROM cinne_users WHERE nickname_cius=?");
    $sql -> bindParam(1, $nameuser);
    $sql -> execute();
    $rta = $sql -> fetch(PDO::FETCH_ASSOC);
    $user = $rta['name_cius'];
    $suser = $rta['surname_cius'];
    $img = $rta['img_cius'];
   
?>
    <!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylepripar.css">
    <title>Cinne</title>
</head>
<body>
    <header>
    <div id="topri">
        <img src= "<?php echo $img ?>"  id="usuario">
        <div id="topri2">
            <h2> <?php echo "$user" ?> </h2>
            <h3><?php echo "$suser" ?></h3>
        </div>
        <div id="topri3">
            <div id="topri4">
                <h1>CINNE</h1>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Administrar</button>
            <div  class="dropdown-content">
                <a href="registermovie.php" class="opciones">Registrar pelis</a>
                <a href="registerclient.php" class="opciones">Registrar clientes</a>
                <a href="registerlocates.php" class="opciones">Registrar Ubicaciones</a>
            </div>
        </div>
        
    </div>
    </header>
     <h2>Catalogo</h2>


    <a href="index.php"><button>Inicio</button></a>
</body>
</html> 