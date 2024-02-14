<?php
session_start();
if (empty($_SESSION['usuario'])){
    header('Location: index.php?ms=debe_iniciar_sesion');
    exit();
}
?>