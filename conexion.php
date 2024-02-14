<?php
function conectDb(){

    try {
        $enlase = new PDO('mysql:host=localhost;dbname=Cinne', 'chavez', 'eddiach117');
        return $enlase;
    }
    catch(PDOException $e){
        echo "La conexion ha fallado perro ".$e ->getMessage();
    }
}

?>  
