<?php
include('conexion.php');
$enlase = conectDb();
$consulta = "SELECT * from cinne_users WHERE state_cius = 1";
$estado = $enlase->query($consulta);
$usuarios = $estado->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <h1>CONSULTAS</h1>
</head>
<body>
    <TABLE border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>fecha de nacimiento</th>
                <th>numero de documento</th>
                <th>Accion</th>
         <tbody>
                </tr>
                            <?php foreach ($usuarios as $usuario): ?>
                                <tr>
                                    <td><?php echo $usuario['id_cius']; ?> </td>
                                    <td><?php echo $usuario['name_cius']; ?> </td>
                                    <td><?php echo $usuario['surname_cius']; ?> </td>
                                    <td><?php echo $usuario['burndate_cius']; ?> </td>
                                    <td><?php echo $usuario['idnumber_cius']; ?> </td>
                                    <td><a href="updateuser1.php?x= <?php echo $usuario['id_cius'];?>"> <button>Actualizar</button></a>       <a href="deleteuser.php?x= <?php echo $usuario['id_cius'];?>"> <button>Eliminar</button>
                                    </td>
                                </tr>
                            <?php  endforeach; ?>
        </tbody>
    </TABLE>
    <br>
    <a href="index.php"><button>Menu principal</button></a>
    
</body>
</html>               
            
        </thead>
