<!-- ESTE ARCHIVO ME RECIBE LOS DATOS QUE EL USEER ENVÍA A TRAVÉS DEL BOTÓN -->

<?php

    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

if(isset($_POST['guardar'])) {// guardar el el nombre del submit
    require_once("Estudiante.php");

    $config = new Estudiante(); // traer la clase con una variable

    $config->setNombres($_POST['nombres']); // el name = nombres de estudiantes.php linea 103
    $config-> setDireccion($_POST['direccion']); // linea 113
    $config-> setLogros($_POST['logros']);//linea 123 
    $config-> setSkills($_POST['skills']);
    $config-> setReview($_POST['review']);
    $config-> setSer($_POST['ser']);
    $config-> setIngles($_POST['ingles']);
    $config-> setEspecialidad($_POST['especialidad']);
    // invocar método para insertar datos
    $config-> insertData();
    echo "<script> alert('LOS DATOS FUERON GUARDADOS EXITOSAMENTE');document.location = 'estudiantes.php'</script>";

}

?>