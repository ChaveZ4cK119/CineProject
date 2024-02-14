<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinne</title>
    <link rel="stylesheet" href="css/stylerepaxl.css">
   
</head>
<body>
    
    <div id="priform">
        <div id="priform2">
        <form action="registro_user.php" method="post">
        <h1>CINNE</h1>
        <?php
            $ex = $_REQUEST;
            if (!empty($ex['x']) ) {
            ?>  <h3 id="inderr">Este usuario ya esta registrado</h3>
            <?php }
            if (!empty($ex['y']) ){;
                ?> <h3 id="inderr">No se han llenado todos los campos</h3>
                <?php
                }?>
            
            
            
            
                <h2>Registro de usuario</h2>
                <label>Nickname</label><br/>
                <input type="text" required name="nickname" placeholder="Nombre de usuario" class="ru"><br/>
                <label>Password</label><br/>
                <input type="password" required name="password" placeholder="Contraseña" class="ru"><br/>
                <label>Name</label><br/>
                <input type="text" name="name" required placeholder="Nombre" class="ru"><br/>
                <label>Surname</label><br/>
                <input type="text" name="surname" required placeholder="Apellido" class="ru"><br/>
                <label>Burndate</label><br/>
                <input type="date" name="burndate" required placeholder="Fecha de nacimiento" class="ru"><br/>
                <label>ID</label><br/>
                <input type="number" name="id" required placeholder="Numero de docuemnto" class="ru"><br/>
                <label>Image</label><br/>
                <input type="text" name="img" required placeholder="URL de la imagen" class="ru"><br/>

                <br>
                <input type="submit" value="Guardar" id="gbutton">
         </form>
         <a href="index.php" ><button class="xd">Ya estoy registrado</button></a>
        </div>
        <div>
        
        </div>
    </div>
    

     
</body>
</html>
