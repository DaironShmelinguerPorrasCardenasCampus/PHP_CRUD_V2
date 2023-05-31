<?php

if(isset($_POST['registrarse'])){

    require_once("RegistroUser.php");
    $registrar = new RegistrarUser();

    $registrar->setIdCamper(2);
    $registrar->setEmail($_POST['email']);
    $registrar->setUsername($_POST['username']);
    $registrar->setPassword($_POST['password']);

    $registrar->InsertData();
    echo "<script> alert('USUARIO REGISTRADO EXITOSAMENTE');document.location = 'loginRegister.php'</script>";
}







?>