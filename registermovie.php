<?php
include ('Conexions/seguridad.php');
$ex = $_REQUEST;
if (!empty($ex['x'])) {
?>  <h3 id="inderr">No se han seleccionado generos</h3>

<?php 
}
if (!empty($ex['y'])) {
?>  <h3 id="inderr">No se han llenado todos los campos</h3>
<?php
}
if (!empty($ex['e'])) {
?>  <h3 id="inderr">Registro exitoso</h3>
<?php
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de peliculas</title>
    <link rel="stylesheet" href="css/stylecimo.css">
</head>
<body>
<div id="priform">
        <div id="priform2">
        <form action="sendregistermovie.php" method="post">
                <h2>Registro de peliculas</h2>
                <label>Movie's name</label><br/>
                <input type="text" required name="moviesname" placeholder="Nombre de la pelicula" class="ru"><br/> <br>
                <label>Director's name</label><br/>
                <input type="text" name="directorsname" required placeholder="Nombre del director" class="ru"><br/><br>
                <label>Principal characters</label><br/>
                <input type="text" name="protas" required placeholder="Nombre de los protagonistas" class="ru"><br/><br>
                <label>Clasification</label><br/>
                <select name="clasification">
                    <option value="">Clasificacion</option>
                    <option value="G">G</option>
                    <option value="PG">PG</option>
                    <option value="PG-13">PG-18</option>
                    <option value="R">R</option>
                    <option value="NG-17">NG-17</option>
                </select>
                <br>
                <br>
                <label>Release date</label><br/>
                <input type="date" name="releasedate" required placeholder="Fecha de estreno" class="ru"><br/>
                <br>
                <br>
                <br>
                <label>Genders</label>
                <br>
                <br>
                <label>Accion</label>
                <input type="checkbox" class="gender"  name="gender[]" value="Accion" ><br/>
                <label>Aventura</label>
                <input type="checkbox" class="gender"  name="gender[]" value="Aventura"><br/>
                <label>Catastrofe</label>
                <input type="checkbox" class="gender"  name="gender[]" value="Catastrofe"><br/>
                <label>Ciencia Ficción</label>
                <input type="checkbox" class="gender"  name="gender[]" value="Ciencia_ficcion"><br/>
                <label>Comedia</label>
                <input type="checkbox" class="gender"  name="gender[]" value="Comedia"><br/>
                <label>Documentales</label>
                <input type="checkbox" class="gender"  name="gender[]" value="Documentales"><br/>
                <label>Drama</label>
                <input type="checkbox" class="gender"  name="gender[]" value="Drama"><br/>
                <label>Fantasia</label>
                <input type="checkbox" class="gender"  name="gender[]" value="Fantasia"><br/>
                <label>Musicales</label>
                <input type="checkbox" class="gender"  name="gender[]" value="Musicales"><br/>
                <label>Suspenso</label>
                <input type="checkbox" class="gender"  name="gender[]" value="Suspenso"><br/>
                <label>Terror</label>
                <input type="checkbox" class="gender"  name="gender[]" value="Terror"><br/>
                
                
                <br>
                <input type="submit" value="Guardar" id="gbutton">
                <br><br>
        </form>
                <a href="principalmenu.php" ><button id="back">Volver</button></a>
        
            
        
        
        </div>
    </div>
</body>
</html>