<?php session_start(); 
//datos para establecer la conexion con la base de mysql.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "cfg/conexion.php";

// verificamos si se han enviado ya las variables necesarias.
if (isset($_GET["nom"])) {
    $name = $_GET["nom"];
    $responsable = $_GET["res"];
    $telefono = $_GET["tel"];
    $email = $_GET["mail"];
    $observaciones = $_GET["observaciones"];
    $isdn = $_GET["isdn"];
    
    
    
    // Hay campos en blanco
    if($name==NULL|$responsable==NULL|$telefono==NULL|$email==NULL|$observaciones==NULL|$isdn==NULL) {
        echo "un campo est&aacute; vacio.";
        formRegistro();
    }else{

                $query = 'INSERT INTO sala_remota (nombre, responsable, telefono, email_responsable, observaciones, isdn) VALUES ("'.$name.'","'.$responsable.'","'.$telefono.'","'.$email.'","'.$observaciones.'","'.$isdn.'")';
                mysqli_query($mysqli,$query) or die(mysqli_error());
                echo 'La sala '.$name.' ha sido registrada de manera satisfactoria.<br/>';
   header('Location: index.php');
            }
        }

?>