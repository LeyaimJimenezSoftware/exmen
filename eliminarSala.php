<?php session_start(); 
//datos para establecer la conexion con la base de mysql.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "cfg/conexion.php";

// verificamos si se han enviado ya las variables necesarias.
if (isset($_GET["id"])) {
    $id = $_GET["id"];


                $query = 'DELETE FROM SALA_REMOTA WHERE id_sala_remota='.$id;
                mysqli_query($mysqli,$query) or die(mysql_error());
}

   header('Location: index.php');
?>