<?php 
session_start();

            if(empty($xy)){
                session_destroy();
            }
            ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinne</title>
    <link rel="stylesheet" href="css/styleinde.css">
   
       
   
</head>
<body>
    
    <div id="priform"> 
     
       
        
        <div id="priform2"> 

            <h1>CINNE</h1>
       
        <form action="login.php" method="post">
            <?php
            $ex = $_REQUEST;
            if (!empty($ex['x'])) {
            ?>  <h3 id="inderr">Usuario o contraseña incorrectos</h3>
            <?php }?>
            <?php if (!empty($ex['z'])) {

        ?><h3 id="inderr">Ya puedes ingresar</h3>
            
         <?php
        }
        ?>
            
                <h2>Inicio de sesion</h2>
                <label>Nickname</label><br/>
                <input type="text" required name="nickname" placeholder="Nombre de usuario" class="ru"><br/> <br>
                <label>Password</label><br/>
                <input type="password" required name="password" placeholder="Contraseña" class="ru"><br/>
                <br>
                <br>
                <br>
                <input type="submit" value="Ingresar" id="gbutton">
         </form>
       
         <a href="registerpage.php" ><button class="xd">Regístrate</button></a>
        </div>
        <div>
        
        </div>
    </div>
    
    <footer>
        
    </footer>
     
</body>
</html>
