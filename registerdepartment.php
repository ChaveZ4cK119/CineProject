<?php
include ('Conexions/seguridad.php');
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de departamentos</title>
    <link rel="stylesheet" href="css/stylecide.css">
</head>
<body>
<div id="priform">
        <div id="priform2">
        <?php
        $ex = $_REQUEST;
        if (!empty($ex['x'])) {
        ?>  <h3 class="inderr">Registro exitoso</h3>

        <?php 
        }
        if (!empty($ex['y'])) {
        ?>  <h3 class="inderr">Este pais no esta registrado</h3>
        <?php
        }
        if (!empty($ex['z'])) {
        ?>  <h3 class="inderr">Este departamento ya esta registrado</h3>
        <?php
        }
        if (!empty($ex['e'])) {
        ?>  <h3 class="inderr">No se han llenado todos los campos</h3>
        <?php
        }
        ?>

        <form action="sendregisterdepartment.php" method="post">
                <h2>Registro de departamentos</h2>
                <label>Department's name</label><br/>
                <input type="text" required name="departmentsname" placeholder="Nombre del departamento" class="ru"><br/> <br>
                <label>From country</label><br/>
                <input type="text" required name="countrysname" placeholder="País al que pertenece" class="ru"><br/> <br>
                <input type="submit" value="Guardar" id="gbutton">

        </form>
        <br><br>
                <a href="registerlocates.php" ><button id="back">Volver</button></a>
        
            
        
        
        </div>
    </div>
</body>
</html>