<?php

require_once('Estudiante.php');
$record = new Estudiante();


if(isset($_GET['id']) && isset($_GET['req'])){ //req 

    if($_GET['req']== "delete"){
        $record-> setId($_GET['id']); //CON EL GET RECIBIMOS CON CUAL ID HAY QUE ELIMINAR
        $record-> delete(); //MÉTODO
        echo "<script> alert ('DATOS ELIMINADOS EXITOSAMENTE');document.location='estudiantes.php'</script>";
    }
}






?>