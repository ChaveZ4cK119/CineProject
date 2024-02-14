<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinne</title>
    <link rel="stylesheet" href="css/styleciclis.css">
</head>
<body>
    
    <div id="priform">
        <div id="priform2">
        <form action="sendregisterclient.php" method="post">
        <?php
        $ex = $_REQUEST;
        if (!empty($ex['x'])) {
        ?>  <h3 class="inderr">Ciudad no encontrada</h3>
            <h3 class="inderr">Debe registrar la ciudad</h3>

        <?php 
        }
        if (!empty($ex['y'])) {
        ?>  <h3 class="inderr">No se ha llenado el campo</h3>
        <?php
        }
        if (!empty($ex['z'])) {
        ?>  <h3 class="inderr">Este cliente ya esta registrado</h3>
        <?php
        }
        if (!empty($ex['e'])) {
        ?>  <h3 class="inderr">Registro exitoso</h3>
        <?php
        }
        ?>
                <h2>Registro de clientes</h2>
                <label>Name</label><br/>
                <input type="text" name="name" required placeholder="Nombre" class="ru"><br/><br>
                <label>Surname</label><br/>
                <input type="text" name="surname" required placeholder="Apellido" class="ru"><br/><br>
                <label>Burndate</label><br/>
                <input type="date" name="burndate" required placeholder="Fecha de nacimiento" class="ru"><br/><br>
                <label>ID</label><br/>
                <input type="number" name="id" required placeholder="Numero de docuemnto" class="ru"><br/> <br>
                <label>Emai</label><br>
                <input type="email" name="email" required placeholder="Correo electronico" class="ru"><br/><br>
                <label>Phone number</label><br>
                <input type="number" name="phnumber" required placeholder="Numero de telefono" class="ru"><br/>
                <br>
                <label>Client's city</label><br>
                <input type="text" name="clientscity" required placeholder="Ciudad del cliente" class="ru"><br/><br>
                <label>Clients's direcction</label><br>
                <input type="text" name="ndir" required placeholder="Direccion del cliente" class="ru"><br/><br>
                <br>
                <br>
                <input type="submit" value="Guardar" id="gbutton">
                <br>
                <br>
         </form>
         <a href="principalmenu.php" ><button id="back">Volver</button></a>
        </div>
       
    </div>
</body>
</html>
