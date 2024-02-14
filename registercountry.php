<?php
include ('Conexions/seguridad.php');
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de peliculas</title>
    <link rel="stylesheet" href="css/stylereco.css">
</head>
<body>
<div id="priform">
        <div id="priform2">
        <?php
        $ex = $_REQUEST;
        if (!empty($ex['x'])) {
        ?>  <h3 class="inderr">Este pais ya se ha registrado</h3>

        <?php 
        }
        if (!empty($ex['y'])) {
        ?>  <h3 class="inderr">No se ha llenado el campo</h3>
        <?php
        }
        if (!empty($ex['z'])) {
        ?>  <h3 class="inderr">Registro exitoso</h3>
        <?php
        }
        if (!empty($ex['e'])) {
        ?>  <h3 class="inderr">Algo ha salido mal perro</h3>
        <?php
        }
        ?>

        <form action="sendregistercountry.php" method="post">
                <h2>Registro de paises</h2>
                <label>Country's name</label><br/>
                <input type="text" required name="countrysname" placeholder="Nombre del país" class="ru"><br/> <br>
                <input type="submit" value="Guardar" id="gbutton">

        </form>
        <br><br>
                <a href="registerlocates.php" ><button id="back">Volver</button></a>
        
            
        
        
        </div>
    </div>
</body>
</html>